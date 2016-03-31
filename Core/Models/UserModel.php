<?php 

namespace Core\Models;

/**
* 
*/
class UserModel{
	
	static private $app;

	function __construct() 	{
		self::$app = \Slim\Slim::getInstance();
	}

	static public function getUser($id){

		$aUser = self::$app->db->fetchOne("SELECT * FROM users WHERE id = ? ", MYSQLI_ASSOC, $id);
		return  $aUser;    	
	}
}

$oUserModel = new UserModel();