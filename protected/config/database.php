<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'class'=>'CDbConnection',
	'connectionString' => 'mysql:host=ec2-52-37-191-183.us-west-2.compute.amazonaws.com;dbname=prestamo3',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'Estocada.25',
	'charset' => 'utf8',
	
);