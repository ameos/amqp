<?php

$EM_CONF['amqp'] = [
    'title' => 'TYPO3 AMQP Messenger Gateway',
    'description' => 'TYPO3 AMQP Messenger Gateway',
    'author' => 'AMEOS Team',
    'author_email' => 'typo3dev@ameos.com',
    'author_company' => 'AMEOS',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
