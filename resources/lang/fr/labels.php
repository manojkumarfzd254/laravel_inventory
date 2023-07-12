<?php
return [
	"backend" => [
	"users" => [
	"create" => "Créer un utilisateur",
	"edit" => "Modifier l'utilisateur",
	"management" => "Gestion des utilisateurs",
    "show"=>"Afficher l'utilisateur",
    "shows"=>[
        "tabs"=>[
            "titles"=>[
                "details"=>"Des détails",
                "other"=>"Autre",
            ],
        ],
    ],
    "tabs"=>[
       "details"=>[
           "name"=>"Nom",
           "email"=>"E-mail",
           "image"=>"Image",
           "status"=>"Statut",
       ]
    ],
	"title" => "Utilisatrices",
	"table" => [
	"id" => "Identifiant",
	"createdat" => "Créé à",
	],
	],
	"permissions" => [
	"create" => "Créer une autorisation",
	"edit" => "Modifier l'autorisation",
	"management" => "Gestion des autorisations",
	"title" => "Autorisations",
	"table" => [
	"id" => "Identifiant",
	"createdat" => "Créé à",
    "permission"=>"Autorisation",
    "display_name"=>"Afficher un nom",
    "sort"=>"Sorte",
	],
	],
	"roles" => [
	"create" => "Créer un rôle",
	"edit" => "Modifier le rôle",
	"management" => "Gestion des rôles",
	"title" => "Les rôles",
	"table" => [
	"id" => "Identifiant",
    "role"=>"Rôle",
    "permissions"=>"Autorisations",
    "number_of_users"=>"Nombre d'utilisateurs",
    "sort"=>"Sorte",
	"createdat" => "Créé à",
	],
	],
	"menus" => [
	"create" => "Créer un menu",
	"edit" => "Modifier le menu",
	"management" => "Gestion des menus",
	"title" => "Menus",
	"table" => [
	"id" => "Identifiant",
    'name'=>'Nom',
    'type'=>'Taper',
	"createdat" => "Créé à",
	],
    "field"=>[
        "type"=>"Taper",
        "name"=>"Nom",
    ]
	],
    "menu" => [
        "field"=>[
            "type"=>"Taper",
            "name"=>"Nom",
            "url"=>"URL",
            "icon_title"=>"Police classe géniale. par exemple. fa-lb",
            "url_type"=>"Type d'URL",
            "url_types"=>[
                "route"=>"Route",
                "static"=>"Statique",
            ],
            "open_in_new_tab"=>"Ouvrir l'URL dans un nouvel onglet",
            "icon"=>"Classe d'icônes",
            "view_permission_id"=>"Autorisation",
        ]
    ],
	"settings" => [
	"create" => "Créer un paramètre",
	"edit" => "Modifier le paramètre",
	"management" => "Gestion des paramètres",
	"title" => "Réglages",
    "seo"=>"Paramètres de référencement",
    "companydetails"=>"Détails de l'entreprise",
    "mail"=>"Paramètres de messagerie",
    "footer"=>"Paramètres du pied de page",
    "about"=>"Sur",
    "terms"=>"termes",
    "google"=>"Code de suivi Google Analytics",
	"table" => [
	"id" => "Identifiant",
	"createdat" => "Créé à",
	],
	],
    "pages"=>[
        "management" => "Gestion des pages",
    ],
    "modules"=>[
        "management" => "Gestion des modules",
    ],
	],
    "general"=>[
        "actions"=>"action",
        "all"=>"Toute",
        "custom"=>"Personnalisé",
    ]
];
