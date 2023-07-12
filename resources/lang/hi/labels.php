<?php
return [
	"backend" => [
	"users" => [
	"create" => "उपयोगकर्ता बनाइये",
	"edit" => "यूजर को संपादित करो",
	"management" => "उपयोगकर्ता प्रबंधन",
    "show"=>"उपयोगकर्ता दिखाएं",
    "shows"=>[
        "tabs"=>[
            "titles"=>[
                "details"=>"विवरण",
                "other"=>"अन्य",
            ],
        ],
    ],
    "tabs"=>[
       "details"=>[
           "name"=>"नाम",
           "email"=>"ईमेल",
           "image"=>"छवि",
           "status"=>"स्थिति",
       ]
    ],
	"title" => "उपयोगकर्ताओं",
	"table" => [
	"id" => "पहचान",
	"createdat" => "पर बनाया गया",
	],
	],
	"permissions" => [
	"create" => "अनुमति बनाएं",
	"edit" => "अनुमति संपादित करें",
	"management" => "अनुमति प्रबंधन",
	"title" => "अनुमतियां",
	"table" => [
	"id" => "पहचान",
	"createdat" => "पर बनाया गया",
    "permission"=>"अनुमति",
    "display_name"=>"प्रदर्शित होने वाला नाम",
    "sort"=>"तरह",
	],
	],
	"roles" => [
	"create" => "भूमिका बनाएं",
	"edit" => "भूमिका संपादित करें",
	"management" => "भूमिका प्रबंधन",
	"title" => "भूमिकाएँ",
	"table" => [
	"id" => "पहचान",
    "role"=>"भूमिका",
    "permissions"=>"अनुमतियां",
    "number_of_users"=>"उपयोगकर्ताओं की संख्या",
    "sort"=>"तरह",
	"createdat" => "पर बनाया गया",
	],
	],
	"menus" => [
	"create" => "मेनू बनाएं",
	"edit" => "मेनू संपादित करें",
	"management" => "मेनू प्रबंधन",
	"title" => "मेनू",
	"table" => [
	"id" => "पहचान",
    'name'=>'नाम',
    'type'=>'प्रकार',
	"createdat" => "पर बनाया गया",
	],
    "field"=>[
        "type"=>"प्रकार",
        "name"=>"नाम",
    ]
	],
    "menu" => [
        "field"=>[
            "type"=>"प्रकार",
            "name"=>"नाम",
            "url"=>"यूआरएल",
            "icon_title"=>"फ़ॉन्ट भयानक वर्ग। उदाहरण के लिए एफए-एलबी",
            "url_type"=>"यूआरएल प्रकार",
            "url_types"=>[
                "route"=>"मार्ग",
                "static"=>"स्थिर",
            ],
            "open_in_new_tab"=>"URL को नए Tab में खोलें",
            "icon"=>"चिह्न वर्ग",
            "view_permission_id"=>"अनुमति",
        ]
    ],
	"settings" => [
	"create" => "सेटिंग बनाएं",
	"edit" => "सेटिंग संपादित करें",
	"management" => "सेटिंग प्रबंधन",
	"title" => "समायोजन",
    "seo"=>"एसईओ सेटिंग्स",
    "companydetails"=>"संस्थान के विवरण",
    "mail"=>"मेल सेटिंग्स",
    "footer"=>"पाद सेटिंग्स",
    "about"=>"के बारे में",
    "terms"=>"मामले",
    "google"=>"गूगल एनालिटिक्स ट्रैक कोड",
	"table" => [
	"id" => "पहचान",
	"createdat" => "पर बनाया गया",
	],
	],
    "pages"=>[
        "management" => "पृष्ठ प्रबंधन",
    ],
    "modules"=>[
        "management" => "मॉड्यूल प्रबंधन",
    ],
	],
    "general"=>[
        "actions"=>"कार्य",
        "all"=>"सभी",
        "custom"=>"रीति",
    ]
];
