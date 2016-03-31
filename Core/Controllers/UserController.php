<?php 

namespace Core\Controllers;
use Core\Models\UserModel as MUser;

/**
* 
*/
class UserController{	

	static private $app;
	
	function __construct() 	{
		self::$app = \Slim\Slim::getInstance();
	}


	/**
	 *	Отображение данных пользователя
	 *	@param int id
	 */

	static public function index($id){	

		$aUser = MUser::getUser($id);		

		var_dump($aUser);

		//$data = array('id'=>$str);		
		self::$app->render('user.tpl', array('game'=>$aUser));
		return true;

	}


	/**
	 *	Создание пользователя 
	 *	@param int id
	 */

	static public function add(){	

		$aPost = self::$app->request()->post();
		var_dump($aPost);


		//$aUser = MUser::getUser(1);		

		

		if(!empty($aError)){
			self::$app->flash('error', implode("<br>", $aError));
		}else{
			self::$app->flash('success', 'Вы авторизованы');
		}
		//self::$app->redirect("/");

		//$data = array('id'=>$str);		
		//self::$app->render('user.tpl', array('user'=>$aUser));
		return true;

	}



	/**
	 *	Отображение формы добавленния пользователя
	 *	@param int id
	 */

	static public function form(){	
			
		//$data = array('id'=>$str);		
		self::$app->render('user.form.tpl', array());
		return true;

	}



}

$oUserController = new UserController();