<?php
defined('TYPO3_MODE') || die('Access denied.');
/***************************************************************
 * Extension Manager/Repository config file for ext: "hellotypo3-gridelements"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'hellotypo3 gridelements',
    'description' => 'Gridelements Settings',
    'category' => 'distribution',
    'author' => 'Stefan Sajok',
    'author_email' => 'sajok@hellotypo3.de',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '^10',
            'gridelements' => '^10',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
