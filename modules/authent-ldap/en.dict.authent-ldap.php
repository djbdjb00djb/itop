<?php
// Copyright (C) 2010 Combodo SARL
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
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserLDAP
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:UserLDAP' => 'LDAP user',
	'Class:UserLDAP+' => 'User authentified by LDAP',
	'Class:UserLDAP/Attribute:contactid' => 'Contact (person)',
	'Class:UserLDAP/Attribute:contactid+' => 'Personal details from the business data',
	'Class:UserLDAP/Attribute:last_name' => 'Last name',
	'Class:UserLDAP/Attribute:last_name+' => 'Name of the corresponding contact',
	'Class:UserLDAP/Attribute:first_name' => 'First name',
	'Class:UserLDAP/Attribute:first_name+' => 'First name of the corresponding contact',
	'Class:UserLDAP/Attribute:email' => 'Email',
	'Class:UserLDAP/Attribute:email+' => 'Email of the corresponding contact',
	'Class:UserLDAP/Attribute:login' => 'Login',
	'Class:UserLDAP/Attribute:login+' => 'user identification string',
	'Class:UserLDAP/Attribute:password' => 'Password',
	'Class:UserLDAP/Attribute:password+' => 'user authentication string',
	'Class:UserLDAP/Attribute:language' => 'Language',
	'Class:UserLDAP/Attribute:language+' => 'user language',
	'Class:UserLDAP/Attribute:language/Value:EN US' => 'English',
	'Class:UserLDAP/Attribute:language/Value:EN US+' => 'English (U.S.)',
	'Class:UserLDAP/Attribute:language/Value:FR FR' => 'French',
	'Class:UserLDAP/Attribute:language/Value:FR FR+' => 'French (France)',
	'Class:UserLDAP/Attribute:profile_list' => 'Profiles',
	'Class:UserLDAP/Attribute:profile_list+' => 'Roles, granting rights for that person',
));



?>