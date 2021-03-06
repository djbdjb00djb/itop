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
	'Class:Organization/Attribute:deliverymodel_id' => 'Модель доставки~~',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => 'Delivery model name~~',
	'Class:Organization/Attribute:deliverymodel_name+' => '',
	'Class:ContractType' => 'Contract Type~~',
	'Class:ContractType+' => '',
	'Class:CustomerContract' => 'Договора с клиентами',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:services_list' => 'Services~~',
	'Class:CustomerContract/Attribute:services_list+' => '',
	'Class:ProviderContract' => 'Договора с поставщиками',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:functionalcis_list' => 'CIs~~',
	'Class:ProviderContract/Attribute:functionalcis_list+' => '',
	'Class:ProviderContract/Attribute:sla' => 'SLA',
	'Class:ProviderContract/Attribute:sla+' => 'Договор об уровне сервиса',
	'Class:ProviderContract/Attribute:coverage' => 'Время работы',
	'Class:ProviderContract/Attribute:coverage+' => '',
	'Class:lnkContactToContract' => 'Link Contact / Contract~~',
	'Class:lnkContactToContract+' => '',
	'Class:lnkContactToContract/Attribute:contract_id' => 'Contract~~',
	'Class:lnkContactToContract/Attribute:contract_id+' => '',
	'Class:lnkContactToContract/Attribute:contact_id' => 'Contact~~',
	'Class:lnkContactToContract/Attribute:contact_id+' => '',
	'Class:lnkContractToDocument' => 'Link Contract / Document~~',
	'Class:lnkContractToDocument+' => '',
	'Class:lnkContractToDocument/Attribute:contract_id' => 'Contract~~',
	'Class:lnkContractToDocument/Attribute:contract_id+' => '',
	'Class:lnkContractToDocument/Attribute:document_id' => 'Document~~',
	'Class:lnkContractToDocument/Attribute:document_id+' => '',
	'Class:lnkFunctionalCIToProviderContract' => 'Link FunctionalCI / ProviderContract~~',
	'Class:lnkFunctionalCIToProviderContract+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id' => 'Provider contract~~',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id' => 'CI~~',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id+' => '',
	'Class:ServiceFamily' => 'Service Familly~~',
	'Class:ServiceFamily+' => '',
	'Class:ServiceFamily/Attribute:name' => 'Name~~',
	'Class:ServiceFamily/Attribute:name+' => '',
	'Class:ServiceFamily/Attribute:services_list' => 'Services~~',
	'Class:ServiceFamily/Attribute:services_list+' => '',
	'Class:Service' => 'Услуга',
	'Class:Service+' => '',
	'Class:Service/Attribute:name' => 'Название',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:org_id' => 'Поставщик',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:servicefamily_id' => 'Service Family~~',
	'Class:Service/Attribute:servicefamily_id+' => '',
	'Class:Service/Attribute:description' => 'Описание',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:documents_list' => 'Documents~~',
	'Class:Service/Attribute:documents_list+' => '',
	'Class:Service/Attribute:contacts_list' => 'Contacts~~',
	'Class:Service/Attribute:contacts_list+' => '',
	'Class:Service/Attribute:status' => 'Статус',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:implementation' => 'implementation~~',
	'Class:Service/Attribute:status/Value:implementation+' => '',
	'Class:Service/Attribute:status/Value:obsolete' => 'Устаревший',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => 'Производство',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:customercontracts_list' => 'Customer contracts~~',
	'Class:Service/Attribute:customercontracts_list+' => '',
	'Class:Service/Attribute:providercontracts_list' => 'Provider contracts~~',
	'Class:Service/Attribute:providercontracts_list+' => '',
	'Class:Service/Attribute:functionalcis_list' => 'Depends on CIs~~',
	'Class:Service/Attribute:functionalcis_list+' => '',
	'Class:Service/Attribute:servicesubcategories_list' => 'Service sub categories~~',
	'Class:Service/Attribute:servicesubcategories_list+' => '',
	'Class:lnkDocumentToService' => 'Link Document / Service~~',
	'Class:lnkDocumentToService+' => '',
	'Class:lnkDocumentToService/Attribute:service_id' => 'Service~~',
	'Class:lnkDocumentToService/Attribute:service_id+' => '',
	'Class:lnkDocumentToService/Attribute:document_id' => 'Document~~',
	'Class:lnkDocumentToService/Attribute:document_id+' => '',
	'Class:lnkContactToService' => 'Link Contact / Service~~',
	'Class:lnkContactToService+' => '',
	'Class:lnkContactToService/Attribute:service_id' => 'Service~~',
	'Class:lnkContactToService/Attribute:service_id+' => '',
	'Class:lnkContactToService/Attribute:contact_id' => 'Contact~~',
	'Class:lnkContactToService/Attribute:contact_id+' => '',
	'Class:ServiceSubcategory' => 'Подкатегории услуг',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => 'Название',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => 'Описание',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => 'Услуга',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:request_type' => 'Request type~~',
	'Class:ServiceSubcategory/Attribute:request_type+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => 'incident~~',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => 'service request~~',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => '',
	'Class:ServiceSubcategory/Attribute:status' => 'Status~~',
	'Class:ServiceSubcategory/Attribute:status+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => 'implementation~~',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => 'obsolete~~',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => 'production~~',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => '',
	'Class:SLA' => 'SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => 'Название',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:description' => 'description~~',
	'Class:SLA/Attribute:description+' => '',
	'Class:SLA/Attribute:org_id' => 'Provider~~',
	'Class:SLA/Attribute:org_id+' => '',
	'Class:SLA/Attribute:slts_list' => 'SLTs~~',
	'Class:SLA/Attribute:slts_list+' => '',
	'Class:SLA/Attribute:customercontracts_list' => 'Customer contracts~~',
	'Class:SLA/Attribute:customercontracts_list+' => '',
	'Class:SLT' => 'SLT',
	'Class:SLT+' => 'Порог уровня услуги',
	'Class:SLT/Attribute:name' => 'Название',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:priority' => 'Priority~~',
	'Class:SLT/Attribute:priority+' => '',
	'Class:SLT/Attribute:priority/Value:1' => 'critical~~',
	'Class:SLT/Attribute:priority/Value:1+' => '',
	'Class:SLT/Attribute:priority/Value:2' => 'high~~',
	'Class:SLT/Attribute:priority/Value:2+' => '',
	'Class:SLT/Attribute:priority/Value:3' => 'medium~~',
	'Class:SLT/Attribute:priority/Value:3+' => '',
	'Class:SLT/Attribute:priority/Value:4' => 'low~~',
	'Class:SLT/Attribute:priority/Value:4+' => '',
	'Class:SLT/Attribute:request_type' => 'Request type~~',
	'Class:SLT/Attribute:request_type+' => '',
	'Class:SLT/Attribute:request_type/Value:incident' => 'incident~~',
	'Class:SLT/Attribute:request_type/Value:incident+' => '',
	'Class:SLT/Attribute:request_type/Value:service_request' => 'service request~~',
	'Class:SLT/Attribute:request_type/Value:service_request+' => '',
	'Class:SLT/Attribute:metric' => 'Метрика',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:tto' => 'TTO~~',
	'Class:SLT/Attribute:metric/Value:tto+' => '',
	'Class:SLT/Attribute:metric/Value:ttr' => 'TTR~~',
	'Class:SLT/Attribute:metric/Value:ttr+' => '',
	'Class:SLT/Attribute:value' => 'Значение',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:unit' => 'Unit~~',
	'Class:SLT/Attribute:unit+' => '',
	'Class:SLT/Attribute:unit/Value:hours' => 'hours~~',
	'Class:SLT/Attribute:unit/Value:hours+' => '',
	'Class:SLT/Attribute:unit/Value:minutes' => 'minutes~~',
	'Class:SLT/Attribute:unit/Value:minutes+' => '',
	'Class:lnkSLAToSLT' => 'Link SLA / SLT~~',
	'Class:lnkSLAToSLT+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_id' => 'SLA~~',
	'Class:lnkSLAToSLT/Attribute:sla_id+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_id' => 'SLT~~',
	'Class:lnkSLAToSLT/Attribute:slt_id+' => '',
	'Class:lnkCustomerContractToService' => 'Link Customer Contract / Service~~',
	'Class:lnkCustomerContractToService+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => 'Customer contract~~',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_id' => 'Service~~',
	'Class:lnkCustomerContractToService/Attribute:service_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => 'SLA~~',
	'Class:lnkCustomerContractToService/Attribute:sla_id+' => '',
	'Class:lnkProviderContractToService' => 'Link Provider Contract / Service~~',
	'Class:lnkProviderContractToService+' => '',
	'Class:lnkProviderContractToService/Attribute:service_id' => 'Service~~',
	'Class:lnkProviderContractToService/Attribute:service_id+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_id' => 'Provider contract~~',
	'Class:lnkProviderContractToService/Attribute:providercontract_id+' => '',
	'Class:lnkFunctionalCIToService' => 'Link FunctionalCI / Service~~',
	'Class:lnkFunctionalCIToService+' => '',
	'Class:lnkFunctionalCIToService/Attribute:service_id' => 'Service~~',
	'Class:lnkFunctionalCIToService/Attribute:service_id+' => '',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id' => 'CI~~',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id+' => '',
	'Class:DeliveryModel' => 'Delivery Model~~',
	'Class:DeliveryModel+' => '',
	'Class:DeliveryModel/Attribute:name' => 'Name~~',
	'Class:DeliveryModel/Attribute:name+' => '',
	'Class:DeliveryModel/Attribute:org_id' => 'Organization~~',
	'Class:DeliveryModel/Attribute:org_id+' => '',
	'Class:DeliveryModel/Attribute:description' => 'Description~~',
	'Class:DeliveryModel/Attribute:description+' => '',
	'Class:DeliveryModel/Attribute:contacts_list' => 'Contacts~~',
	'Class:DeliveryModel/Attribute:contacts_list+' => '',
	'Class:DeliveryModel/Attribute:customers_list' => 'Customers~~',
	'Class:DeliveryModel/Attribute:customers_list+' => '',
	'Class:lnkDeliveryModelToContact' => 'Link Delivery Model / Contact~~',
	'Class:lnkDeliveryModelToContact+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => 'Delivery model~~',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => 'Contact~~',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => 'Role~~',
	'Class:lnkDeliveryModelToContact/Attribute:role_id+' => '',
	'Menu:ServiceManagement' => 'Управление сервисами',
	'Menu:ServiceManagement+' => 'Обзор управление сервисами',
	'Menu:Service:Overview' => 'Обзор',
	'Menu:Service:Overview+' => '',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Договоры по уровню сервиса',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Договоры по статусу',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Договоры заканчивающиеся в течении 30-ти ней',
	'Menu:ServiceType' => 'Типы сервисов',
	'Menu:ServiceType+' => 'Типы сервисов',
	'Menu:ProviderContract' => 'Договоры с поставщиками',
	'Menu:ProviderContract+' => 'Договоры с поставщиками',
	'Menu:CustomerContract' => 'Договоры с клиентами',
	'Menu:CustomerContract+' => 'Договоры с клиентами',
	'Menu:ServiceSubcategory' => 'Подкатегории сервисов',
	'Menu:ServiceSubcategory+' => 'Подкатегории сервисов',
	'Menu:Service' => 'Сервисы',
	'Menu:Service+' => 'Сервисы',
	'Menu:ServiceElement' => 'Sevice elements~~',
	'Menu:ServiceElement+' => '',
	'Menu:SLA' => 'SLAs',
	'Menu:SLA+' => 'Соглашения об уровне обслуживания',
	'Menu:SLT' => 'SLTs',
	'Menu:SLT+' => 'Цели уровня обслуживания',
	'Menu:RequestTemplate' => 'Request Templates~~',
	'Menu:RequestTemplate+' => '',
	'Menu:DeliveryModel' => 'Delivery models~~',
	'Menu:DeliveryModel+' => '',
	'Menu:ServiceFamily' => 'Service families~~',
	'Menu:ServiceFamily+' => '',
	'Menu:Procedure' => 'Procedures catalog~~',
	'Menu:Procedure+' => '',
	'Class:Contract' => 'Договор',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => 'Название',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:org_id' => 'Customer~~',
	'Class:Contract/Attribute:org_id+' => '',
	'Class:Contract/Attribute:organization_name' => 'Customer Name~~',
	'Class:Contract/Attribute:organization_name+' => '',
	'Class:Contract/Attribute:contacts_list' => 'Contacts~~',
	'Class:Contract/Attribute:contacts_list+' => '',
	'Class:Contract/Attribute:documents_list' => 'Documents~~',
	'Class:Contract/Attribute:documents_list+' => '',
	'Class:Contract/Attribute:description' => 'Орисание',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => 'Дата начала',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => 'Дата окончания',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => 'Стоимость',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => 'Валюта стоимости',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => 'Доллары',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => 'Евро',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:contracttype_id' => 'Contract type~~',
	'Class:Contract/Attribute:contracttype_id+' => '',
	'Class:Contract/Attribute:contracttype_name' => 'Contract type Name~~',
	'Class:Contract/Attribute:contracttype_name+' => '',
	'Class:Contract/Attribute:billing_frequency' => 'Частота платежей',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:cost_unit' => 'Единица стоимости',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:provider_id' => 'Provider~~',
	'Class:Contract/Attribute:provider_id+' => '',
	'Class:Contract/Attribute:provider_name' => 'Provider Name~~',
	'Class:Contract/Attribute:provider_name+' => '',
	'Class:Contract/Attribute:status' => 'Status~~',
	'Class:Contract/Attribute:status+' => '',
	'Class:Contract/Attribute:status/Value:implementation' => 'implementation~~',
	'Class:Contract/Attribute:status/Value:implementation+' => '',
	'Class:Contract/Attribute:status/Value:obsolete' => 'obsolete~~',
	'Class:Contract/Attribute:status/Value:obsolete+' => '',
	'Class:Contract/Attribute:status/Value:production' => 'production~~',
	'Class:Contract/Attribute:status/Value:production+' => '',
	'Class:Contract/Attribute:finalclass' => 'Тип',
	'Class:Contract/Attribute:finalclass+' => '',
	'Class:ProviderContract/Attribute:contracttype_id' => 'Contract type~~',
	'Class:ProviderContract/Attribute:contracttype_id+' => '',
	'Class:ProviderContract/Attribute:contracttype_name' => 'Contract type name~~',
	'Class:ProviderContract/Attribute:contracttype_name+' => '',
	'Class:lnkContactToContract/Attribute:contract_name' => 'Contract Name~~',
	'Class:lnkContactToContract/Attribute:contract_name+' => '',
	'Class:lnkContactToContract/Attribute:contact_name' => 'Contact Name~~',
	'Class:lnkContactToContract/Attribute:contact_name+' => '',
	'Class:lnkContractToDocument/Attribute:contract_name' => 'Contract Name~~',
	'Class:lnkContractToDocument/Attribute:contract_name+' => '',
	'Class:lnkContractToDocument/Attribute:document_name' => 'Document Name~~',
	'Class:lnkContractToDocument/Attribute:document_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name' => 'Provider contract Name~~',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name' => 'CI Name~~',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name+' => '',
	'Class:Service/Attribute:organization_name' => 'Provider Name~~',
	'Class:Service/Attribute:organization_name+' => '',
	'Class:Service/Attribute:servicefamily_name' => 'Service Family Name~~',
	'Class:Service/Attribute:servicefamily_name+' => '',
	'Class:lnkDocumentToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkDocumentToService/Attribute:service_name+' => '',
	'Class:lnkDocumentToService/Attribute:document_name' => 'Document Name~~',
	'Class:lnkDocumentToService/Attribute:document_name+' => '',
	'Class:lnkContactToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkContactToService/Attribute:service_name+' => '',
	'Class:lnkContactToService/Attribute:contact_name' => 'Contact Name~~',
	'Class:lnkContactToService/Attribute:contact_name+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => 'Услуга',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:SLA/Attribute:organization_name' => 'Provider Name~~',
	'Class:SLA/Attribute:organization_name+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_name' => 'SLA Name~~',
	'Class:lnkSLAToSLT/Attribute:sla_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_name' => 'SLT Name~~',
	'Class:lnkSLAToSLT/Attribute:slt_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => 'Customer contract Name~~',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkCustomerContractToService/Attribute:service_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => 'SLA Name~~',
	'Class:lnkCustomerContractToService/Attribute:sla_name+' => '',
	'Class:lnkProviderContractToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkProviderContractToService/Attribute:service_name+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_name' => 'Provider contract Name~~',
	'Class:lnkProviderContractToService/Attribute:providercontract_name+' => '',
	'Class:lnkFunctionalCIToService/Attribute:service_name' => 'Service Name~~',
	'Class:lnkFunctionalCIToService/Attribute:service_name+' => '',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name' => 'CI Name~~',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name+' => '',
	'Class:DeliveryModel/Attribute:organization_name' => 'Organization Name~~',
	'Class:DeliveryModel/Attribute:organization_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => 'Delivery model name~~',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => 'Contact name~~',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => 'Role name~~',
	'Class:lnkDeliveryModelToContact/Attribute:role_name+' => '',
));
?>
