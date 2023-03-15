<?php

return [
    'user' => [
        'maxlength_email' => 255,
        'maxlength_password' => 20,
        'minlength_password' => 8,
    ],
    'maxlength_input' => 255,
    'minlength_input' => 1,
    'representative' => [
        'max' => 32,
    ],
    'code' => [
        'max' => 13,
    ],
    'free_tag_content' => [
        'max' => 500,
    ],
    'achievement_goal' => [
        'max' => 500,
    ],
    'memo' => [
        'max' => 2500,
    ],
    'max_input' => 500,
    'business_tags' => [
        'min' => 1,
    ],
    'establishment_year' => [
        'stored_format' => 'Ym',
        'displayed_format' => 'Y/m',
        'allow_date_format' => 'Y/m/d,Ym,Y/m',
    ],
    'fiscal_year' => [
        'min' => 1,
        'max' => 12,
    ],
    'images' => [
        'mimes' => 'gif,jpeg,jpg,png',
        'extensions' => '.gif,.jpeg,.jpg,.png',
    ],
    'files' => [
        'max_size' => [
            'kilobytes' => 5120,
            'megabytes' => 5,
        ],
        'all_file_max_size' => [
            'megabytes' => 100,
        ],
        'min_size' => [
            'kilobytes' => 0,
        ],
    ],
    'matching_achievement' => [
        'min_score' => 0,
    ],
];
