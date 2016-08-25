<?php
class User extends AppModel
{
     var $name = 'User';
     var $useTable = 'user_login';
     var $primaryKey = 'id';
     
	function check_password( $email = '', $password = '')
	{
		return $this->find('first', array('fields' => array('id'),'conditions' => array('email' => $email, 'senha' => $password)));
	}
}