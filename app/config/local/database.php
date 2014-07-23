<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => getenv('DB_HOST_INTRANET'),
			'database'  => getenv('DB_NAME_INTRANET'),
			'username'  => getenv('DB_USERNAME'),
			'password'  => getenv('DB_PASSWORD'),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

//        'CUTZAMALA' => array(
//            'driver'   => 'sqlsrv',
//            'host'     => getenv('DB_HOST_SAO'),
//            'database' => 'SAO1814_CUTZAMALA',
//            'username' => getenv('DB_USERNAME'),
//            'password' => getenv('DB_PASSWORD'),
//            'prefix'   => '',
//            'type'	   => 'OBRA',
//        ),

//        'CIRCUITO' => array(
//            'driver'   => 'sqlsrv',
//            'host'     => getenv('DB_HOST_SAO'),
//            'database' => 'SAO1814_CIRCUITO',
//            'username' => getenv('DB_USERNAME'),
//            'password' => getenv('DB_PASSWORD'),
//            'prefix'   => '',
//            'type'	   => 'OBRA',
//        ),
//
//        'ATLACOMULCOXIV' => array(
//            'driver'   => 'sqlsrv',
//            'host'     => getenv('DB_HOST_SAO'),
//            'database' => 'SAO1814_ATLACOMULCO_XIV',
//            'username' => getenv('DB_USERNAME'),
//            'password' => getenv('DB_PASSWORD'),
//            'prefix'   => '',
//            'type'	   => 'OBRA',
//        ),

	),

);
