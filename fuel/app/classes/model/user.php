<?php

class Model_User extends \Orm\Model_Soft
{
	protected static $_properties = array(
		
		'id',
		'name',
		'email',
		'gender',
		'created_at',
		'updated_at',
                'deleted_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'users';

}
