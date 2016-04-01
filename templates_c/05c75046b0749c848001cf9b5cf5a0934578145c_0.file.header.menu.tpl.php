<?php /* Smarty version 3.1.24, created on 2016-04-01 15:15:14
         compiled from "./templates/header.menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:213556657156fe6652a9df66_37417752%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05c75046b0749c848001cf9b5cf5a0934578145c' => 
    array (
      0 => './templates/header.menu.tpl',
      1 => 1459511418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213556657156fe6652a9df66_37417752',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe6652aa4cb9_80866618',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe6652aa4cb9_80866618')) {
function content_56fe6652aa4cb9_80866618 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '213556657156fe6652a9df66_37417752';
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