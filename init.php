<?php

/**
 * Инициализация основных объектов
 */

use Jasny\Config;
use Jasny\MySQL\DB;
//use Jasny\DB\MySQL\Query;

// Создаем объект приложения
	$app = new \Slim\Slim(array(
	    'view' => new \Slim\Views\Smarty()
	));

// Загружаем конфиг
	$app->container->singleton('cfg', function () {  
	    return new Config('settings.ini');
	});

// Обработчик сессий
	$app->add(new \Slim\Middleware\SessionCookie(array(
	    'expires' => '20 minutes',
	    'path' => '/',
	    'domain' => null,
	    'secure' => false,
	    'httponly' => false,
	    'name' => 'slim_session',
	    'secret' => 'CHANGE_ME',
	    'cipher' => MCRYPT_RIJNDAEL_256,
	    'cipher_mode' => MCRYPT_MODE_CBC
	)));	

// Подключаем бд
	$oCfgDB = $app->cfg->db;
	new DB($oCfgDB->host, $oCfgDB->user, $oCfgDB->pwd, $oCfgDB->dbname);
	$app->container->singleton('db', function () {  
	    return DB::conn();
	});

	//$result = $app->db->query("SELECT * FROM on_files");

	//var_dump(DB::conn()->fetchValue("SELECT file FROM on_files WHERE fileid = 27"));
	//var_dump($app->db->fetchValue("SELECT file FROM on_files WHERE fileid = 27"));

// Настраиваем  Smarty
	$view = $app->view();
	$view->parserDirectory = dirname(__FILE__) . '/libs/smarty-3.1.24/libs';
	$view->parserCompileDirectory = dirname(__FILE__) . '/templates_c';
	$view->parserCacheDirectory = dirname(__FILE__) . '/cache';
	$view->parserTemplatesDirectory = dirname(__FILE__) . '/templates';

	$app->view->appendData(array(
    	'admin_url' => $app->cfg->site->admin_url
	));

	/*************************************************************************/
/* Справка по БД
Краткая 
    new DB($host, $user, $pwd, $dbname);
    $result = DB::conn()->query("SELECT * FROM foo");
    $result = DB::conn()->query("SELECT * FROM foo WHERE type = ?", $type);
    $result = DB::conn()->query("SELECT * FROM foo WHERE type = ? AND cat IN ?", $type, array(1, 7));

    $items = DB::conn()->fetchAll("SELECT id, name, description FROM foo WHERE type = ?", MYSQLI_ASSOC, $type);
    $item  = DB::conn()->fetchOne("SELECT * FROM foo WHERE id = ?", MYSQLI_ASSOC, $id);
    $names = DB::conn()->fetchColumn("SELECT name FROM foo WHERE type = ?", $type);
    $list  = DB::conn()->fetchPairs("SELECT id, name FROM foo WHERE type = ?", $type);
    $name  = DB::conn()->fetchValue("SELECT name FROM foo WHERE id = ?", $id);

    DB::conn()->save('foo', $values);
    DB::conn()->save('foo', array($values1, $values2, $values3));

Полная    
	http://jasny.github.io/DB-MySQL/docs/class-Jasny.MySQL.DB.html
 */