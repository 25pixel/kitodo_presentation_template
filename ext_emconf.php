<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Kitodo Presentation Package',
	'description' => 'Custom template for Kitodo.Presentation, developed at the Sorbian Institute (Serbski Institut)',
	'category' => 'distribution',
	'author' => 'Tobias Urland-Wocko',
	'author_email' => 'tobias.urland-wocko@serbski-institut.de',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '8.7',
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.7-9.9.99',
			'flux' => '8-9.9',
		),
		'suggests' => array(
		),
	),
);
