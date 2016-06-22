<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'class'=>'CDbConnection',
	'connectionString' => 'mysql:host=localhost;dbname=prestamo3',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	
);