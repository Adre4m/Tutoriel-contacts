<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | L\'following language lines contain L\'default error messages used by
    | L\'validator class. Some of L\'se rules have multiple versions such
    | as L\'size rules. Feel free to tweak each of L\'se messages here.
    |
    */

    'accepted'             => 'Doit être accepté.',
    'active_url'           => 'N\'est pas une URL valide.',
    'after'                => 'Doit daté d\'après le :date.',
    'alpha'                => 'Ne doit contenir que des lettres.',
    'alpha_dash'           => 'Ne doit contenir que des lettres, nombres, et tirets.',
    'alpha_num'            => 'Ne doit contenir que des lettres et nombres.',
    'array'                => 'Doit être un tableau.',
    'before'               => 'Doit daté d\'avant le :date.',
    'between'              => [
                 'numeric' => 'Doit être entre :min et :max.',
                 'file'    => 'Doit être entre :min et :max kilooctets.',
                 'string'  => 'Doit être entre :min et :max caractères.',
                 'array'   => 'Doit avoir entre :min et :max objets.',
    ],
    'boolean'              => 'Doit être vrai ou faux.',
    'confirmed'            => 'La confirmation ne correspond pas.',
    'date'                 => 'N\'est pas une date valide.',
    'date_format'          => 'Ne correspond pas au format :format.',
    'different'            => 'L\':attribute et :other doivent être differents.',
    'digits'               => 'Doit faire :digits digits.',
    'digits_between'       => 'Doit être entre :min et :max digits.',
    'distinct'             => 'A une valeur dupliquée.',
    'email'                => 'Doit être une adresse e-mail valide.',
    'exists'               => 'Invalide.',
    'filled'               => 'Requis.',
    'image'                => 'Doit être un image.',
    'in'                   => 'Invalide.',
    'in_array'             => 'N\'existe pas dans :other.',
    'integer'              => 'Doit être un entier.',
    'ip'                   => 'Doit être une adresse IP valide.',
    'json'                 => 'Doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => 'Ne doit pas être plus grand que :max.',
        'file'    => 'Ne doit pas être plus grand que :max kilooctets.',
        'string'  => 'Ne doit pas être plus grand que :max caractères.',
        'array'   => 'Ne doit pas avoir plus de :max objets.',
    ],
    'mimes'                => 'Doit être un fichier de type : :values.',
    'min'                  => [
        'numeric' => 'Doit être au moins :min.',
        'file'    => 'Doit être au moins :min kilooctets.',
        'string'  => 'Doit être au moins :min caractères.',
        'array'   => 'Doit avoir au moins :min objets.',
    ],
    'not_in'               => 'Invalide.',
    'numeric'              => 'Doit être a number.',
    'present'              => 'Doit être présent.',
    'regex'                => 'Le format est invalide.',
    'required'             => 'Requis.',
    'required_if'          => 'Requis quand :other is :value.',
    'required_unless'      => 'Requis à moins que :other est dans :values.',
    'required_with'        => 'Requis quand :values est présent.',
    'required_with_all'    => 'Requis quand :values est présent.',
    'required_without'     => 'Requis quand :values n\'est pésent.',
    'required_without_all' => 'Requis quand aucun des :values sont présents.',
    'same'                 => 'L\':attribute et :other doivent correspondrent.',
    'size'                 => [
        'numeric' => 'Doit faire :size.',
        'file'    => 'Doit faire :size kilooctets.',
        'string'  => 'Doit faire :size caractères.',
        'array'   => 'Doit contenir :size objets.',
    ],
    'string'               => 'Doit être une chaîne.',
    'timezone'             => 'Doit être une zone valide.',
    'unique'               => 'Déjà pris.',
    'url'                  => 'Le format est invalide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using L\'
    | convention "attribute.rule" to name L\'lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | L\'following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail adresse instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
