<?
$aMenuLinks = Array(
	Array(
		"Company", 
		"/about/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Employees", 
		"/company/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Documents", 
		"/docs/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('CommonDocuments')" 
	),
	Array(
		"Services", 
		"/services/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Workgroups", 
		"/workgroups/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Workgroups')" 
	),
	Array(
		"CRM", 
		"/crm/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('crm') && CModule::IncludeModule('crm') && CCrmPerms::IsAccessEnabled()" 
	),
	Array(
		"Applications", 
		"/marketplace/", 
		Array(), 
		Array(), 
		"IsModuleInstalled('rest')" 
	)
);
?>