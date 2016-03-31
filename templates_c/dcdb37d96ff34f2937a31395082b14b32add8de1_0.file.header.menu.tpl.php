<?php /* Smarty version 3.1.24, created on 2016-04-01 02:03:06
         compiled from "./templates/header.menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:137402665956fdacaa5127c5_39990248%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcdb37d96ff34f2937a31395082b14b32add8de1' => 
    array (
      0 => './templates/header.menu.tpl',
      1 => 1459465010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137402665956fdacaa5127c5_39990248',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fdacaa5161a6_52342537',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fdacaa5161a6_52342537')) {
function content_56fdacaa5161a6_52342537 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '137402665956fdacaa5127c5_39990248';
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/">Главная</a></li>
                <li><a href="/users/">Пользователи</a></li>
                <li><a href="/transactions/">Транзакции</a></li>
                <li><a href="/user/add/">Добавить пользователя</a></li>
                <li><a href="/transactions/add/">Добавить транзакцию</a></li>    
            </ul>
        </div>
    </div>
</nav><?php }
}
?>