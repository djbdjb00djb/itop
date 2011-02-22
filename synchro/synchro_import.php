<?php
// Copyright (C) 2011 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Data Exchange web service 
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

//
// Known limitations
// - reconciliation is made on the column primary_key
//

require_once('../approot.inc.php');
require_once(APPROOT.'/application/application.inc.php');
require_once(APPROOT.'/application/webpage.class.inc.php');
require_once(APPROOT.'/application/csvpage.class.inc.php');
require_once(APPROOT.'/application/clipage.class.inc.php');

require_once(APPROOT.'/application/startup.inc.php');

class ExchangeException extends Exception
{
}

$aPageParams = array
(
	'auth_user' => array
	(
		'mandatory' => true,
		'modes' => 'cli',
		'default' => null,
		'description' => 'login (must have enough rights to create objects of the given class)',
	),
	'auth_pwd' => array
	(
		'mandatory' => true,
		'modes' => 'cli',
		'default' => null,
		'description' => 'password',
	),
	'data_source_id' => array
	(
		'mandatory' => true,
		'modes' => 'http,cli',
		'default' => null,
		'description' => 'Synchro data source id',
	),
	'csvdata' => array
	(
		'mandatory' => true,
		'modes' => 'http',
		'default' => null,
		'description' => 'data',
	),
	'csvfile' => array
	(
		'mandatory' => true,
		'modes' => 'cli',
		'default' => '',
		'description' => 'local data file, replaces csvdata if specified',
	),
	'synchronize' => array
	(
		'mandatory' => false,
		'modes' => 'http,cli',
		'default' => '1',
		'description' => 'If set to 1, then the synchronization will be executed right after the data load',
	),
	'charset' => array
	(
		'mandatory' => false,
		'modes' => 'http,cli',
		'default' => 'UTF-8',
		'description' => 'Character set encoding of the CSV data: UTF-8, ISO-8859-1, WINDOWS-1251, WINDOWS-1252, ISO-8859-15',
	),
	'separator' => array
	(
		'mandatory' => false,
		'modes' => 'http,cli',
		'default' => ';',
		'description' => 'column separator in CSV data',
	),
	'qualifier' => array
	(
		'mandatory' => false,
		'modes' => 'http,cli',
		'default' => '"',
		'description' => 'test qualifier in CSV data',
	),
	'output' => array
	(
		'mandatory' => false,
		'modes' => 'http,cli',
		'default' => 'summary',
		'description' => '[retcode] to return the count of lines in error, [summary] to return a concise report, [details] to get a detailed report (each line listed)',
	),
/*
	'reportlevel' => array
	(
		'mandatory' => false,
		'modes' => 'http,cli',
		'default' => 'errors|warnings|created|changed|unchanged',
		'description' => 'combination of flags to limit the detailed output',
	),
*/
	'simulate' => array
	(
		'mandatory' => false,
		'modes' => 'http,cli',
		'default' => '0',
		'description' => 'If set to 1, then the load will not be executed, but the expected report will be produced',
	),
	'comment' => array
	(
		'mandatory' => false,
		'modes' => 'http,cli',
		'default' => '',
		'description' => 'Comment to be added into the change log',
	),
);

function UsageAndExit($oP)
{
	global $aPageParams;
	$bModeCLI = utils::IsModeCLI();

	$oP->p("USAGE:\n");
	foreach($aPageParams as $sParam => $aParamData)
	{
		$aModes = explode(',', $aParamData['modes']);
		if ($bModeCLI)
		{
			if (in_array('cli', $aModes))
			{
				$sDesc = $aParamData['description'].', '.($aParamData['mandatory'] ? 'mandatory' : 'optional, defaults to ['.$aParamData['default'].']');
				$oP->p("$sParam = $sDesc");
			}
		}
		else
		{
			if (in_array('http', $aModes))
			{
				$sDesc = $aParamData['description'].', '.($aParamData['mandatory'] ? 'mandatory' : 'optional, defaults to ['.$aParamData['default'].']');
				$oP->p("$sParam = $sDesc");
			}
		}
	}
	$oP->output();
	exit;
}


function ReadParam($oP, $sParam)
{
	global $aPageParams;
	assert(isset($aPageParams[$sParam]));
	assert(!$aPageParams[$sParam]['mandatory']);
	$sValue = utils::ReadParam($sParam, $aPageParams[$sParam]['default'], true /* Allow CLI */);
	return trim($sValue);
}

function ReadMandatoryParam($oP, $sParam)
{
	global $aPageParams;
	assert(isset($aPageParams[$sParam]));
	assert($aPageParams[$sParam]['mandatory']);

	$sValue = utils::ReadParam($sParam, null, true /* Allow CLI */);
	if (is_null($sValue))
	{
		$oP->p("ERROR: Missing argument '$sParam'\n");
		UsageAndExit($oP);
	}
	return trim($sValue);
}

/////////////////////////////////
// Main program

if (utils::IsModeCLI())
{
	$oP = new CLIPage("iTop - Data Exchange");

	// Next steps:
	//   specific arguments: 'csvfile'
	//   
	$sAuthUser = ReadMandatoryParam($oP, 'auth_user');
	$sAuthPwd = ReadMandatoryParam($oP, 'auth_pwd');
	$sCsvFile = ReadMandatoryParam($oP, 'csvfile');
	if (UserRights::CheckCredentials($sAuthUser, $sAuthPwd))
	{
		UserRights::Login($sAuthUser); // Login & set the user's language
	}
	else
	{
		$oP->p("Access restricted or wrong credentials ('$sAuthUser')");
		exit;
	}

	if (!is_readable($sCsvFile))
	{
		$oP->p("Input file could not be found or could not be read: '$sCsvFile'");
		exit;
	}
	$sCSVData = file_get_contents($sCsvFile);

}
else
{
	$_SESSION['login_mode'] = 'basic';
	require_once(APPROOT.'/application/loginwebpage.class.inc.php');
	LoginWebPage::DoLogin(); // Check user rights and prompt if needed

	$oP = new CSVPage("iTop - Data Exchange");
	$sCSVData = utils::ReadPostedParam('csvdata');
}


try
{
	//////////////////////////////////////////////////
	//
	// Read parameters
	//
	$iDataSourceId = ReadMandatoryParam($oP, 'data_source_id');
	$sSynchronize = ReadParam($oP, 'synchronize');
	$sSep = ReadParam($oP, 'separator');
	$sQualifier = ReadParam($oP, 'qualifier');
	$sCharSet = ReadParam($oP, 'charset');
	$sOutput = ReadParam($oP, 'output');
//	$sReportLevel = ReadParam($oP, 'reportlevel');
	$sSimulate = ReadParam($oP, 'simulate');
	$sComment = ReadParam($oP, 'comment');

	$oLoadStartDate = new DateTime(); // Now

	//////////////////////////////////////////////////
	//
	// Statistics
	//
	$iCountErrors = 0;
	$iCountCreations = 0;
	$iCountUpdates = 0;

	//////////////////////////////////////////////////
	//
	// Check parameters format/consistency
	//
	if (strlen($sCSVData) == 0)
	{
		throw new ExchangeException("Missing data - at least one line is expected");
	}

	$oDataSource = MetaModel::GetObject('SynchroDataSource', $iDataSourceId, false);
	if (is_null($oDataSource))
	{
		throw new ExchangeException("Unknown data source id: '$iDataSourceId'");
	}
	$sClass = $oDataSource->GetTargetClass();

	if (strlen($sSep) > 1)
	{
		throw new ExchangeException("Separator is limited to one character, found '$sSep'");
	}

	if (strlen($sQualifier) > 1)
	{
		throw new ExchangeException("Text qualifier is limited to one character, found '$sQualifier'");
	}

	if (!in_array($sOutput, array('retcode', 'summary', 'details')))
	{
		throw new ExchangeException("Unknown output format: '$sOutput'");
	}

/*
	$aReportLevels = explode('|', $sReportLevel);
	foreach($aReportLevels as $sLevel)
	{
		if (!in_array($sLevel, explode('|', 'errors|warnings|created|changed|unchanged')))
		{
			throw new ExchangeException("Unknown level in reporting level: '$sLevel'");
		}
	}
*/

	if ($sSimulate == '1')
	{
		$bSimulate = true;
	}
	else
	{
		$bSimulate = false;
	}

	if ($sSynchronize == '1')
	{
		$bSynchronize = true;
	}
	else
	{
		$bSynchronize = false;
	}

	//////////////////////////////////////////////////
	//
	// Security
	//
	// #@# todo - implement
	/*
	if (!$oDataSource->IsUserAllowed(UserRights::GetUserId())
	{
		throw new SecurityException(Dict::Format('UI:Error:DataExchangeNotAllowed', UserRights::GetUserFriendlyName()));
	}
	*/

	//////////////////////////////////////////////////
	//
	// Parse first line, check attributes, analyse the request
	//
	if ($sCharSet == 'UTF-8')
	{
		$sUTF8Data = $sCSVData;		
	}
	else
	{
		$sUTF8Data = iconv($sCharSet, 'UTF-8//IGNORE//TRANSLIT', $sCSVData);
	}
	$oCSVParser = new CSVParser($sUTF8Data, $sSep, $sQualifier); 

	$aInputColumns = $oCSVParser->ListFields();
	$iColCount = count($aInputColumns);

	// Check columns
	$aColumns = $oDataSource->GetSQLColumns();
	foreach($aInputColumns as $iFieldId => $sInputColumn)
	{
		if ($sInputColumn == 'primary_key')
		{
			$iPrimaryKeyCol = $iFieldId;
			continue;
		}
		if (!array_key_exists($sInputColumn, $aColumns))
		{
			throw new ExchangeException("Unknown column '$sInputColumn' (class: '$sClass')");
		}
	}
	if (!isset($iPrimaryKeyCol))
	{
		throw new ExchangeException("Missing reconciliation column 'primary_key'");
	}

	//////////////////////////////////////////////////
	//
	// Go for parsing and interpretation
	//

	$aData = $oCSVParser->ToArray();
	$iLineCount = count($aData);

	$sTable = $oDataSource->GetDataTable();

   // Prepare insert columns
	$sInsertColumns = '`'.implode('`, `', $aInputColumns).'`';

   foreach($aData as $iRow => $aRow)
   {
      $sReconciliationCondition = "`primary_key` = ".CMDBSource::Quote($aRow[$iPrimaryKeyCol]);
		$sSelect = "SELECT COUNT(*) FROM `$sTable` WHERE $sReconciliationCondition"; 
		$aRes = CMDBSource::QueryToArray($sSelect);
		$iCount = $aRes[0]['COUNT(*)'];

		if ($iCount == 0)
		{
			// No record... create it
			//
			$iCountCreations++;
			if ($sOutput == 'details')
			{
				$oP->add("$iRow: New entry, reconciliation: '$sReconciliationCondition'\n");
			}

			$aValues = array(); // Used to build the insert query
			foreach ($aRow as $iCol => $value)
			{
				$aValues[] = CMDBSource::Quote($value);
			}
			$sValues = implode(', ', $aValues);
			$sInsert = "INSERT INTO `$sTable` ($sInsertColumns) VALUES ($sValues)";
			if ($bSimulate)
			{
				if ($sOutput == 'details')
				{
					$oP->add("$iRow: SIMULATE - Planned query: $sInsert'\n");
				}
			}
			else
			{
				CMDBSource::Query($sInsert);
			}
		}
		elseif ($iCount == 1)
		{
			// Found a match... update it
			//
			$iCountUpdates++;
			if ($sOutput == 'details')
			{
				$oP->add("$iRow: Update entry, reconciliation: '$sReconciliationCondition'\n");
			}

			$aValuePairs = array(); // Used to build the update query
			foreach ($aRow as $iCol => $value)
			{
				// Skip reconciliation column
				if ($iCol == $iPrimaryKeyCol) continue;
	
				$sCol = $aInputColumns[$iCol];
				$aValuePairs[] = "`$sCol` = ".CMDBSource::Quote($aRow[$iCol]);
			}
			$sValuePairs = implode(', ', $aValuePairs);
			$sUpdateQuery = "UPDATE `$sTable` SET $sValuePairs WHERE $sReconciliationCondition";
			if ($bSimulate)
			{
				if ($sOutput == 'details')
				{
					$oP->add("$iRow: SIMULATE - Planned query: $sUpdateQuery'\n");
				}
			}
			else
			{
				CMDBSource::Query($sUpdateQuery);
			}
		}
		else
		{
			// Too many records... ambiguity
			//
			$iCountErrors++;
			$oP->add("$iRow: Error - Failed to reconcile, found $iCount rows having '$sReconciliationCondition'\n");
		}
	}

	//////////////////////////////////////////////////
	//
	// Synchronize
	//
	if ($bSynchronize && !$bSimulate)
	{
		$aDataToReplica = array();
		$oDataSource->Synchronize($aDataToReplica, $oLoadStartDate);
		//echo "#@# Synchronize() returned :<br/>\n";
		//echo "<pre>\n";
		//print_r($aDataToReplica);
		//echo "</pre>\n";
	}

	//////////////////////////////////////////////////
	//
	// Summary of settings and results
	//
	if ($sOutput == 'retcode')
	{
		$oP->add($iCountErrors);
	}

	if (($sOutput == "summary") || ($sOutput == 'details'))
	{
		$oP->add_comment("Data Source: ".$iDataSourceId);
		$oP->add_comment("Synchronize: ".($bSynchronize ? '1' : '0'));
		$oP->add_comment("Class: ".$sClass);
		$oP->add_comment("Separator: ".$sSep);
		$oP->add_comment("Qualifier: ".$sQualifier);
		$oP->add_comment("Charset Encoding:".$sCharSet);
		$oP->add_comment("Data Size: ".strlen($sCSVData));
		$oP->add_comment("Data Lines: ".$iLineCount);
		$oP->add_comment("Columns: ".implode(', ', $aInputColumns));
		$oP->add_comment("Output format: ".$sOutput);
//		$oP->add_comment("Report level: ".$sReportLevel);
		$oP->add_comment("Simulate: ".($bSimulate ? '1' : '0'));
		$oP->add_comment("Change tracking comment: ".$sComment);
		$oP->add_comment("Issues: ".$iCountErrors);
//		$oP->add_comment("Warnings: ".$iCountWarnings);
		$oP->add_comment("Created: ".$iCountCreations);
		$oP->add_comment("Updated: ".$iCountUpdates);
	}
}
catch(ExchangeException $e)
{
	$oP->add_comment($e->getMessage());		
}
catch(SecurityException $e)
{
	$oP->add_comment($e->getMessage());		
}
catch(Exception $e)
{
	$oP->add_comment((string)$e);		
}

$oP->output();
?>