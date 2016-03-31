<?php 

namespace Core\Controllers;
use Core\Models\MainModel as MMain;
use Core\Models\SessionModel as MSession;

/**
* 
*/
class MainController{	

	static private $app;

	function __construct() 	{		
		self::$app = \Slim\Slim::getInstance();
	}

	static public function index(){	
	
		$countUsers = 5;
		$countTrans = 10;
		self::$app->render('index.tpl', array('countUsers'=>$countUsers, 'countTrans'=>$countTrans) );  	
	}

	static public function loginForm(){	

		self::$app->render('login.tpl', array('back_url'=>'/adm/'));  	
	}

	static public function authorization(){	

		//var_dump(self::$app->request()->post());
		$aPost = self::$app->request()->post();

		$aError = array();
		if(!isset($aPost['username']) || empty($aPost['username'])){
			$aError[] = 'Поле Login не может быть пустым.';
		}

		if(!isset($aPost['password']) || empty($aPost['password'])){
			$aError[] = 'Поле Pass не может быть пустым.';
		}
	
		// Выборка записи
		//$user_query = mysql_query("SELECT * FROM ". $tbl_prefix ."users WHERE username = '". $username ."' && password = '". md5($password) ."' LIMIT 1");

		$aUserInfo = self::$app->db->fetchOne("SELECT * FROM on_users WHERE username = ? AND password = ? LIMIT 1", MYSQLI_ASSOC, $aPost['username'], md5($aPost['password']));
		//var_dump($aUserInfo);
		
		if($aUserInfo){
			if($aUserInfo['status'] == 0){
				$aError[] = 'Акаунт неактивный';
			}elseif ($aUserInfo['status'] == 2) {
				$aError[] = 'Акаунт забанен';			
			}elseif ($aUserInfo['usergroup'] != 2 && $aUserInfo['usergroup'] != 3) {
				$aError[] = 'Вы не администратор';
			}elseif($aUserInfo['status'] == 1){				
				$_SESSION['u_id'] = $aUserInfo['userid'];
		    	$_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
		    	$_SESSION['last_visit'] = $aUserInfo['last_visit'];
				
				//var_dump($aPost['back_url']);
				
			}
		}else{
			$aError[] = 'Акаунт не cуществует';
		}

		if(!empty($aError)){
			self::$app->flash('error', implode("<br>", $aError));
		}else{
			self::$app->flash('success', 'Вы авторизованы');
		}
		self::$app->redirect($aPost['back_url']);
		
		//self::$app->render('login.tpl', array('back_url'=>$aPost['back_url']) );  	
	}
}

$oMainController = new MainController();