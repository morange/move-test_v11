<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'MyBootstrap',
    'description' => 'Mein Bootstrap Package',
    'category' => 'templates',
    'author' => 'Steffen Matthes',
    'author_email' => 'steffen-matthes@posteo.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
