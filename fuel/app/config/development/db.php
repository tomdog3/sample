<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=mysql;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock',
			'username'   => 'root',
			'password'   => 'root',
		),
	),
        'redis' => array(
            'default' => array(
                'hostname' => '127.0.0.1',
                'port' => 6379,
                'timeout' => null,
            ),
        ),
);
