<?php
return [
	"backend" => [
	"users" => [
	"create" => "Create User",
	"edit" => "Edit User",
	"management" => "User Management",
	"show" => "Show User",
	"shows" => [
	"tabs" => [
	"titles" => [
	"details" => "Details",
	"other" => "Other",
	],
	],
	],
	"tabs" => [
	"details" => [
	"name" => "Name",
	"email" => "E-mail",
	"image" => "Image",
	"status" => "Status",
	],
	],
	"title" => "Users",
	"table" => [
	"id" => "Id",
	"createdat" => "Created At",
	],
	],
	"permissions" => [
	"create" => "Create Permission",
	"edit" => "Edit Permission",
	"management" => "Permission Management",
	"title" => "Permissions",
	"table" => [
	"id" => "Id",
	"createdat" => "Created At",
	"permission" => "Permission",
	"display_name" => "Display Name",
	"sort" => "Sort",
	],
	],
	"roles" => [
	"create" => "Create Role",
	"edit" => "Edit Role",
	"management" => "Role Management",
	"title" => "Roles",
	"table" => [
	"id" => "Id",
	"role" => "Role",
	"permissions" => "Permissions",
	"number_of_users" => "Number Of Users",
	"sort" => "Sort",
	"createdat" => "Created At",
	],
	],
	"menus" => [
	"create" => "Create Menu",
	"edit" => "Edit Menu",
	"management" => "Menu Management",
	"title" => "Menus",
	"table" => [
	"id" => "Id",
	"name" => "Name",
	"type" => "Type",
	"createdat" => "Created At",
	],
	"field" => [
	"type" => "Type",
	"name" => "Name",
	],
	],
	"menu" => [
	"field" => [
	"type" => "Type",
	"name" => "Name",
	"url" => "URL",
	"icon_title" => "Font awesome class. eg. fa-lb",
	"url_type" => "URL Type",
	"url_types" => [
	"route" => "Route",
	"static" => "Static",
	],
	"open_in_new_tab" => "Open URL In New Tab",
	"icon" => "Icon Class",
	"view_permission_id" => "Permission",
	],
	],
	"settings" => [
	"create" => "Create Setting",
	"edit" => "Edit Setting",
	"management" => "Setting Management",
	"title" => "Settings",
	"seo" => "SEO Settings",
	"companydetails" => "Company Details",
	"mail" => "Mail Settings",
	"footer" => "Footer Settings",
	"about" => "About",
	"terms" => "Terms",
	"google" => "Google Analytics Track Code",
	"table" => [
	"id" => "Id",
	"createdat" => "Created At",
	],
	],
	"pages" => [
	"create" => "Create Page",
	"edit" => "Edit Page",
	"management" => "Page Management",
	"title" => "Pages",
	"table" => [
	"title" => "Title",
	"status" => "Status",
	"createdat" => "Created At",
	"updatedat" => "Updated At",
	"createdby" => "Created By",
	"all" => "All",
	],
	],
	"apis" => [
	"create" => "Create Api",
	"management" => "Api Management",
	"title" => "Api",
	"edit" => "Edit Api",
	"table" => [
	"name" => "Api Name",
	"url" => "Api View Route",
	"controller_path" => "Controller Path",
	"view_permission_id" => "View Permission",
	"created_by" => "Created By",
	],
	],
	"modules" => [
	"management" => "Module Management",
	],
	"diwalis" => [
	"create" => "Create Diwali",
	"edit" => "Edit Diwali",
	"management" => "Diwali Management",
	"title" => "Diwalis",
	"table" => [
	"id" => "Id",
	"createdat" => "Created At",
	],
	],
	"products" => [
	"create" => "Create Product",
	"edit" => "Edit Product",
	"management" => "Product Management",
	"title" => "Products",
	"table" => [
	"id" => "Id",
	"createdat" => "Created At",
	],
	],
	],
	"general" => [
	"actions" => "Action",
	"all" => "All",
	"custom" => "Custom",
	"active" => "Active",
	"inactive" => "Inactive",
	],
];