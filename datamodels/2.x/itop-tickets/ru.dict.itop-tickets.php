<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

/**
 * @author	Vladimir Shilov <shilow@ukr.net>

 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @licence	http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:Ticket' => 'Тикеи',
	'Class:Ticket+' => '',
	'Class:Ticket/Attribute:ref' => 'Ссылка',
	'Class:Ticket/Attribute:ref+' => '',
	'Class:Ticket/Attribute:org_id' => 'Organization~~',
	'Class:Ticket/Attribute:org_id+' => '',
	'Class:Ticket/Attribute:caller_id' => 'Caller~~',
	'Class:Ticket/Attribute:caller_id+' => '',
	'Class:Ticket/Attribute:team_id' => 'Team~~',
	'Class:Ticket/Attribute:team_id+' => '',
	'Class:Ticket/Attribute:agent_id' => 'Agent~~',
	'Class:Ticket/Attribute:agent_id+' => '',
	'Class:Ticket/Attribute:title' => 'Название',
	'Class:Ticket/Attribute:title+' => '',
	'Class:Ticket/Attribute:description' => 'Описание',
	'Class:Ticket/Attribute:description+' => '',
	'Class:Ticket/Attribute:start_date' => 'Начат',
	'Class:Ticket/Attribute:start_date+' => '',
	'Class:Ticket/Attribute:end_date' => 'End date~~',
	'Class:Ticket/Attribute:end_date+' => '',
	'Class:Ticket/Attribute:last_update' => 'Last update~~',
	'Class:Ticket/Attribute:last_update+' => '',
	'Class:Ticket/Attribute:close_date' => 'Close date~~',
	'Class:Ticket/Attribute:close_date+' => '',
	'Class:Ticket/Attribute:private_log' => 'Private log~~',
	'Class:Ticket/Attribute:private_log+' => '',
	'Class:Ticket/Attribute:contacts_list' => 'Contacts~~',
	'Class:Ticket/Attribute:contacts_list+' => '',
	'Class:Ticket/Attribute:functionalcis_list' => 'CIs~~',
	'Class:Ticket/Attribute:functionalcis_list+' => '',
	'Class:Ticket/Attribute:workorders_list' => 'Work orders~~',
	'Class:Ticket/Attribute:workorders_list+' => '',
	'Class:Ticket/Attribute:finalclass' => 'Тип',
	'Class:Ticket/Attribute:finalclass+' => '',
	'Class:lnkContactToTicket' => 'Link Contact / Ticket~~',
	'Class:lnkContactToTicket+' => '',
	'Class:lnkContactToTicket/Attribute:ticket_id' => 'Ticket~~',
	'Class:lnkContactToTicket/Attribute:ticket_id+' => '',
	'Class:lnkContactToTicket/Attribute:contact_id' => 'Contact~~',
	'Class:lnkContactToTicket/Attribute:contact_id+' => '',
	'Class:lnkContactToTicket/Attribute:role' => 'Role~~',
	'Class:lnkContactToTicket/Attribute:role+' => '',
	'Class:lnkFunctionalCIToTicket' => 'Link FunctionalCI / Ticket~~',
	'Class:lnkFunctionalCIToTicket+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id' => 'Ticket~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id' => 'CI~~',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:impact' => 'Impact~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact+' => '',
	'Class:WorkOrder' => 'Work Order~~',
	'Class:WorkOrder+' => '',
	'Class:WorkOrder/Attribute:name' => 'Name~~',
	'Class:WorkOrder/Attribute:name+' => '',
	'Class:WorkOrder/Attribute:status' => 'Status~~',
	'Class:WorkOrder/Attribute:status+' => '',
	'Class:WorkOrder/Attribute:status/Value:open' => 'open~~',
	'Class:WorkOrder/Attribute:status/Value:open+' => '',
	'Class:WorkOrder/Attribute:status/Value:closed' => 'closed~~',
	'Class:WorkOrder/Attribute:status/Value:closed+' => '',
	'Class:WorkOrder/Attribute:description' => 'Description~~',
	'Class:WorkOrder/Attribute:description+' => '',
	'Class:WorkOrder/Attribute:ticket_id' => 'Ticket~~',
	'Class:WorkOrder/Attribute:ticket_id+' => '',
	'Class:WorkOrder/Attribute:team_id' => 'Team~~',
	'Class:WorkOrder/Attribute:team_id+' => '',
	'Class:WorkOrder/Attribute:agent_id' => 'Agent~~',
	'Class:WorkOrder/Attribute:agent_id+' => '',
	'Class:WorkOrder/Attribute:start_date' => 'Start date~~',
	'Class:WorkOrder/Attribute:start_date+' => '',
	'Class:WorkOrder/Attribute:end_date' => 'End date~~',
	'Class:WorkOrder/Attribute:end_date+' => '',
	'Class:WorkOrder/Attribute:log' => 'Log~~',
	'Class:WorkOrder/Attribute:log+' => '',
	'Class:WorkOrder/Stimulus:ev_close' => 'Close~~',
	'Class:WorkOrder/Stimulus:ev_close+' => '',
	'Class:Ticket/Attribute:org_name' => 'Organization Name~~',
	'Class:Ticket/Attribute:org_name+' => '',
	'Class:Ticket/Attribute:caller_name' => 'Caller Name~~',
	'Class:Ticket/Attribute:caller_name+' => '',
	'Class:Ticket/Attribute:team_name' => 'Team Name~~',
	'Class:Ticket/Attribute:team_name+' => '',
	'Class:Ticket/Attribute:agent_name' => 'Agent Name~~',
	'Class:Ticket/Attribute:agent_name+' => '',
	'Class:lnkContactToTicket/Attribute:ticket_ref' => 'Ref~~',
	'Class:lnkContactToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkContactToTicket/Attribute:contact_email' => 'Contact Email~~',
	'Class:lnkContactToTicket/Attribute:contact_email+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref' => 'Ref~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name' => 'CI Name~~',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name+' => '',
	'Class:WorkOrder/Attribute:ticket_ref' => 'Ticket ref~~',
	'Class:WorkOrder/Attribute:ticket_ref+' => '',
	'Class:WorkOrder/Attribute:team_name' => 'Team Name~~',
	'Class:WorkOrder/Attribute:team_name+' => '',
	'Class:WorkOrder/Attribute:agent_email' => 'Agent email~~',
	'Class:WorkOrder/Attribute:agent_email+' => '',
	'Ticket:baseinfo' => 'General Information~~',
	'Ticket:date' => 'Dates~~',
	'Ticket:contact' => 'Contacts~~',
	'Ticket:moreinfo' => 'More Information~~',
	'Ticket:relation' => 'Relations~~',
	'Ticket:log' => 'Communications~~',
	'Ticket:Type' => 'Qualification~~',
	'Ticket:support' => 'Support~~',
	'Ticket:resolution' => 'Resolution~~',
	'Ticket:SLA' => 'SLA report~~',
	'WorkOrder:Details' => 'Details~~',
	'WorkOrder:Moreinfo' => 'More informations~~',
));
?>