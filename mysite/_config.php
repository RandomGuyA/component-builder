<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'Castle10',
	'database' => 'ss_component_builder',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
