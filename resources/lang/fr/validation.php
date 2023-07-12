<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => "L'attribut : doit être accepté.",
    'accepted_if' => "L' :attribut doit être accepté lorsque :other vaut :value.",
    'active_url' => "L'attribut :n'est pas une URL valide.",
    'after' => 'Le :attribut doit être une date après :date.',
    'after_or_equal' => 'Le :attribut doit être une date postérieure ou égale à :date.',
    'alpha' => "L'attribut :ne doit contenir que des lettres.",
    'alpha_dash' => "L'attribut :ne doit contenir que des lettres, des chiffres, des tirets et des traits de soulignement.",
    'alpha_num' => "L'attribut :ne doit contenir que des lettres et des chiffres.",
    'array' => 'Le :attribut doit être un tableau.',
    'before' => 'Le :attribut doit être une date avant :date.',
    'before_or_equal' => 'Le :attribut doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le :attribut doit être compris entre :min et :max.',
        'file' => 'Le :attribut doit être compris entre :min et :max kilo-octets.',
        'string' => 'Le :attribut doit être compris entre :min et :max caractères.',
        'array' => "L'attribut : doit avoir entre : min et : max éléments.",
    ],
    'boolean' => 'Le champ :attribut doit être vrai ou faux.',
    'confirmed' => 'La confirmation:attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => "L'attribut :n'est pas une date valide.",
    'date_equals' => 'Le :attribut doit être une date égale à :date.',
    'date_format' => 'Le :attribut ne correspond pas au format :format.',
    'declined' => "L'attribut: doit être refusé.",
    'declined_if' => "L'attribut : doit être refusé lorsque :other vaut :value.",
    'different' => 'Le :attribut et :autre doivent être différents.',
    'digits' => 'Le :attribut doit être :chiffres chiffres.',
    'digits_between' => 'Le :attribut doit être compris entre :min et :max chiffres.',
    'dimensions' => "L'attribut : a des dimensions d'image non valides.',
    'distinct' => 'The :attribute field has a duplicate value.",
    'email' => "L'attribut: doit être une adresse e-mail valide.",
    'ends_with' => "Le :attribute doit se terminer par l'un des éléments suivants : :values.",
    'enum' => "L'attribut: sélectionné n'est pas valide.",
    'exists' => "L'attribut: sélectionné n'est pas valide.",
    'file' => 'Le :attribut doit être un fichier.',
    'filled' => 'Le champ :attribut doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le :attribut doit être supérieur à :valeur.',
        'file' => 'Le :attribut doit être supérieur à :value kilo-octets.',
        'string' => 'Le :attribut doit être supérieur à :valeur caractères.',
        'array' => 'Le :attribut doit avoir plus de :éléments de valeur.',
    ],
    'gte' => [
        'numeric' => 'Le :attribut doit être supérieur ou égal à :valeur.',
        'file' => 'Le :attribut doit être supérieur ou égal à :value kilo-octets.',
        'string' => "L'attribut : doit être supérieur ou égal aux caractères :value.",
        'array' => 'Le :attribut doit avoir des éléments :value ou plus.',
    ],
    'image' => "L'attribut: doit être une image.",
    'in' => "L'attribut: sélectionné n'est pas valide.",
    'in_array' => "Le champ :attribute n'existe pas dans :other.",
    'integer' => "L'attribut: doit être un entier.",
    'ip' => "L'attribut :doit être une adresse IP valide.",
    'ipv4' => "L'attribut: doit être une adresse IPv4 valide.",
    'ipv6' => "L'attribut: doit être une adresse IPv6 valide.",
    'mac_address' => "L'attribut: doit être une adresse MAC valide.",
    'json' => "L'attribut: doit être une chaîne JSON valide.",
    'lt' => [
        'numeric' => 'Le :attribut doit être inférieur à :valeur.',
        'file' => 'Le :attribut doit être inférieur à :value kilo-octets.',
        'string' => 'Le :attribut doit être inférieur à :valeur caractères.',
        'array' => 'Le :attribut doit avoir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'Le :attribut doit être inférieur ou égal à :valeur.',
        'file' => 'Le :attribut doit être inférieur ou égal à :value kilo-octets.',
        'string' => 'Le :attribut doit être inférieur ou égal aux caractères :value.',
        'array' => 'Le :attribute ne doit pas avoir plus de :éléments de valeur.',
    ],
    'max' => [
        'numeric' => 'Le :attribut ne doit pas être supérieur à :max.',
        'file' => "L' :attribut ne doit pas être supérieur à :max kilo-octets.",
        'string' => 'Le :attribut ne doit pas être supérieur à :max caractères.',
        'array' => 'Le :attribut ne doit pas avoir plus de :max éléments.',
    ],
    'mimes' => 'Le :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'Le :attribut doit être au moins :min.',
        'file' => "L':attribut doit être d'au moins :min kilo-octets.",
        'string' => 'Le :attribut doit contenir au moins :min caractères.',
        'array' => 'Le :attribut doit avoir au moins :min éléments.',
    ],
    'multiple_of' => 'Le :attribut doit être un multiple de :valeur.',
    'not_in' => "L'attribut: sélectionné n'est pas valide.",
    'not_regex' => "Le format :attribut n'est pas valide.",
    'numeric' => "L'attribut: doit être un nombre.",
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribut doit être présent.',
    'prohibited' => 'Le champ :attribut est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other vaut :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other est dans :values.',
    'prohibits' => 'Le champ :attribute interdit la présence de :other.',
    'regex' => "Le format :attribut n'est pas valide.",
    'required' => 'Le champ :attribut est obligatoire.',
    'required_if' => 'Le champ :attribute est obligatoire lorsque :other vaut :value.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire lorsque :des valeurs sont présentes.',
    'required_without' => "Le champ :attribute est obligatoire lorsque : values n'est pas présent.",
    'required_without_all' => "Le champ :attribute est obligatoire lorsqu'aucune des :valeurs n'est présente.",
    'same' => 'Le :attribut et :autre doivent correspondre.',
    'size' => [
        'numeric' => 'Le :attribut doit être :size.',
        'file' => 'Le :attribut doit être :size kilo-octets.',
        'string' => "L'attribut : doit contenir des caractères :size.",
        'array' => "L'attribut : doit contenir des éléments :size.",
    ],
    'starts_with' => "Le :attribute doit commencer par l'un des éléments suivants : :values.",
    'string' => 'Le :attribut doit être une chaîne.',
    'timezone' => "L'attribut: doit être un fuseau horaire valide.",
    'unique' => "L'attribut :a déjà été pris.",
    'uploaded' => "L':attribut n'a pas pu être téléchargé.",
    'url' => "L'attribut: doit être une URL valide.",
    'uuid' => "L'attribut: doit être un UUID valide.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'message personnalisé',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        "backend"=>[
            "permissions"=>[
                "name"=>"Nom",
                "display_name"=>"Afficher un nom",
                "sort"=>'Sorte',
            ],
            "roles"=>[
                "name"=>"Nom",
                "associated_permissions"=>"Autorisations associées",
                "sort"=>'Sorte',
                'active'=>"Active",
            ],
            "settings"=>[
                "sitelogo"=>"Logo du site",
                "favicon"=>"Icône de favori",
                "metatitle"=>"Méta-titre",
                "metakeyword"=>"Méta-mot clé",
                "metadescription"=>"Meta Description",
                "companydetails"=>[
                    "mobile"=>"Mobile",
                    "email"=>"E-mail",
                    "timing"=>"Horaire",
                    "contact_description"=>"La description",
                    "location"=>"Emplacement",
                ],
                "mail"=>[
                    "fromname"=>"De Nom",
                    "fromemail"=>"De l'email",
                ],
                "footer"=>[
                    "text"=>"Texte de pied de page",
                    "copyright"=>"Texte du droit d'auteur",
                ],
                "termscondition"=>[
                    "name"=>"Nom",
                    "version"=>"Version",
                    "description"=>"La description",
                ],
                "google"=>[
                    "analytic"=>"Google Analytics",
                ]
            ],
        ],
    ],

];
