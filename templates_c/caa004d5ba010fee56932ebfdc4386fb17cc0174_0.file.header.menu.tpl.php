<?php /* Smarty version 3.1.24, created on 2016-03-31 14:12:36
         compiled from "./templates/header.menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:171712836056fd0624d34726_25792716%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caa004d5ba010fee56932ebfdc4386fb17cc0174' => 
    array (
      0 => './templates/header.menu.tpl',
      1 => 1459421447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171712836056fd0624d34726_25792716',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fd0624d4e498_41321495',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fd0624d4e498_41321495')) {
function content_56fd0624d4e498_41321495 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '171712836056fd0624d34726_25792716';
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/">Главная</a></li>
                <li><a href="/users/">Пользователи</a></li>
                <li><a href="/transactions/">Транзакции</a></li>
                <li><a href="/user/add">Добавить пользователя</a></li>
                <li><a href="/transactions/add/">Добавить транзакцию</a></li>    
            </ul>
        </div>
    </div>
</nav><?php }
}
?>