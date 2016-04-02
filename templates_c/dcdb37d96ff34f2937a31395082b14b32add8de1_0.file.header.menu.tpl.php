<?php /* Smarty version 3.1.24, created on 2016-04-02 09:28:15
         compiled from "./templates/header.menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:132886936456ff667f0b10e9_97480224%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcdb37d96ff34f2937a31395082b14b32add8de1' => 
    array (
      0 => './templates/header.menu.tpl',
      1 => 1459576747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132886936456ff667f0b10e9_97480224',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56ff667f0bf291_66377353',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ff667f0bf291_66377353')) {
function content_56ff667f0bf291_66377353 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '132886936456ff667f0b10e9_97480224';
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