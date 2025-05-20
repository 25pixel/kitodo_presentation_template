<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Kitodo Presentation Template',
    'description' => 'Custom template for Kitodo.Presentation, developed at the Sorbian Institute (Serbski Institut)',
    'category' => 'templates',
    'author' => 'Tobias Urland-Wocko',
    'author_email' => 'tobias.urland-wocko@serbski-institut.de',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '10.4.0-11.5.99',
            'flux' => '',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
