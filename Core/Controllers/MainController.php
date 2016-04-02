<?php 

namespace Core\Controllers;
use Core\Models\MainModel as MMain;

/**
 * Базовый контроллер
 */
class MainController{	

	static private $app;

	function __construct() 	{		
		self::$app = \Slim\Slim::getInstance();
	}

	/**
	 * Главная страница
	 * @todo Вывести статистику
	 */
	static public function index(){	
		
		$countUsers = 5;
		$countTrans = 10;
		self::$app->render('index.tpl', array('countUsers'=>$countUsers, 'countTrans'=>$countTrans) );  	
	}	
}

$oMainController = new MainController();