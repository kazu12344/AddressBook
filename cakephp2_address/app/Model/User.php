<?php
App::uses('Model', 'AppModel');
/**
* UserModel
*/
class User extends AppModel
{
	public $validate = array(
		'name' => array(
			'rule' 		 => array('maxlength', 64),
			'requred'    => true,
			'allowEmpty' => false,
			'message'	 => 'please input name',
		),
		'mail1' => array(
			'rule' 		 => array('maxlength', 128),
			'requred'    => true,
			'allowEmpty' => false,
			'message'	 => 'please input mail address',
		)
	);
}