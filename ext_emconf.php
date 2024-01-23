<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'minihelper',
    'description' => 'Minihelper, some function missing in TYPO3 12',
    'category' => 'plugin',
    'author' => 'Sven Jürgens',
    'author_email' => 'sj@nordsonne.de',
    'state' => 'stable',
    'version' => '0.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.31-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
