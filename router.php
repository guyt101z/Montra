<?php

use Core\Controllers\MainController as CMain;
use Core\Controllers\UserController as CUser;
//use Core\Models\SessionModel as MSession;


$app->hook('slim.before', "beforeHook");
$app->hook('slim.before.dispatch', "beforeDispatchHook");
$app->hook('slim.after', "afterHook");
$app->hook('slim.after.dispatch', "afterDispatchHook");
$app->hook('slim.before.router', "beforeRouterHook");
$app->hook('slim.after.router', "afterRouterHook");



function beforeDispatchHook(){

	// Временно отключим. 
	// Включать при разработке авторизации
	/*
	$app = \Slim\Slim::getInstance();

	MSession::init();

	if($app->router()->getCurrentRoute()->getName() != 'login'){
		echo "slim.before.dispatch</br>";
	    CMain::loginForm(); 
	    $app->stop();
	}
	*/

}

// Hooks
	function beforeHook(){
	    // echo "slim.before hook</br>";
	}

	function afterHook(){
	    //echo "slim.after hook</br>";
	}

	function afterDispatchHook(){
	    //echo "slim.after.dispatch</br>";
	}

	function beforeRouterHook(){
	    //echo "slim.before.router hook</br>";
	}
	function afterRouterHook(){
	    //echo "slim.after.router hook</br>";
	}
// END TEST HOOKS

$app->get('/user/add/', function ()  use ($app) {
    CUser::form(); 
});

$app->post('/user/add/', function ()  use ($app) {
    CUser::add(); 
});


$app->get('/', function () use ($app) {
    CMain::index(); 
});




// $app->get('/user/:id', function($id) use ($app){  
//     CUser::index($id);  
// })->conditions(array('id' => '[0-9]{1,}'));
