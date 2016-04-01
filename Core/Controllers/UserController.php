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
    	//setlocale(LC_CTYPE, array('ru_RU.utf8', 'ru_UA.utf8')); 
        //setlocale(LC_ALL, array('ru_RU.utf8', 'ru_UA.utf8')); 

		$aPost = self::$app->request()->post();

		// Валидация Card Number
		$isCartNumber =  MUser::validCreditcard($aPost['CardNumber']);	
	
//var_dump($aPost['FirstName']);
		if (!preg_match("/^[а-яА-ЯёЁa-zA-Z0-9]+$/u", $aPost['FirstName'])) {
			$aError[]='Заполните правильно поле "First Name"';
		} 

		if (!preg_match("/^[а-яА-ЯёЁa-zA-Z0-9]+$/u", $aPost['LastName'])) {
			$aError[]='Заполните правильно поле "Last Name"';
		}

		if(!$isCartNumber) $aError[]='Заполните правильно поле "Cart Number"';

var_dump($aError);
		

		if(!empty($aError)){
			self::$app->flash('error', implode("<br>", $aError));
		}else{
			$aValues = array(
				'FirstName'=>$aPost['FirstName'],
				'LastName'=>$aPost['LastName'],
				'CardNumber'=>$aPost['CardNumber'],
				);

			if(MUser::addUser($aValues)){
				self::$app->flash('success', 'Пользователь добавлен');
			}

			
		}
		//self::$app->redirect("/user/add/");

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