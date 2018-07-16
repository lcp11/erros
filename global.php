<?php
return array(
    'db' => array(
        'adapters' => array(
            'adapter' => array(
                'charset' => 'utf8',
                'database' => 'data',
                'driver' => 'Mysqli',
                'username' => 'user',
                'password' => 'pass',
                'hostname' => 'host',
		'port' => '3306',
                'options' => array(
                    'buffer_results' => true,
                ),
            ),
            'adapter2' => array(
                'charset' => 'utf8',
                'database' => 'data',
                'driver' => 'Mysqli',
                'username' => 'user',
                'password' => 'pass',
                'hostname' => 'host',
		'port' => '3306',
                'options' => array(
                    'buffer_results' => true,
                ),
            ),
            'adapter3' => array(
                'charset' => 'utf8',
                'database' => 'data',
                'driver' => 'Mysqli',
                'username' => 'user',
                'password' => 'pass',
                'hostname' => 'host',
		'dns'=>'dns',
		'port' => '3306',
                'options' => array(
                    'buffer_results' => true,
                ),
            ),
            'adapter4' => array(
                'charset' => 'utf8',
                'database' => 'data',
                'driver' => 'Mysqli',
                'username' => 'user',
                'password' => 'pass',
                'hostname' => 'host',
		'port' => '3306',
                'options' => array(
                    'buffer_results' => true,
                ),
            ),
        ),
    ),
    'router' => array(
        'routes' => array(
            'oauth' => array(
                'options' => array(
                    'spec' => '%oauth%',
                    'regex' => '(?P<oauth>(/oauth2|/oauth3|/oauth))',
                ),
                'type' => 'regex',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'adapters' => array(
                'oauth' => array(
                    'adapter' => 'ZF\\MvcAuth\\Authentication\\OAuth2Adapter',
                    'storage' => array(
                        'adapter' => 'pdo',
                        'dsn' => 'mysql:host=host;dbname=data',
                        'route' => '/oauth',
                        'username' => 'user',
                        'password' => 'pass',
                    ),
                ),
                'oauth2' => array(
                    'adapter' => 'ZF\\MvcAuth\\Authentication\\OAuth2Adapter',
                    'storage' => array(
                        'adapter' => 'pdo',
                        'dsn' => 'mysql:host=host;dbname=data',
                        'route' => '/oauth2',
                        'username' => 'user',
                        'password' => 'pass',
                    ),
                ),
                'oauth3' => array(
                    'adapter' => 'ZF\\MvcAuth\\Authentication\\OAuth2Adapter',
                    'storage' => array(
                        'adapter' => 'pdo',
                        'dsn' => 'mysql:host=host;dbname=data',
                        'route' => '/oauth3',
                        'username' => 'user',
                        'password' => 'pass',
                    ),
                ),
            ),
        ),
    ),
	'email' => array(
        'name' => 'smtp',
        'host' => 'smtp',
        'connection_class' => 'login',
        'port' => 587,
        'username' => 'user',
        'password' => 'pass',
    ),
);
