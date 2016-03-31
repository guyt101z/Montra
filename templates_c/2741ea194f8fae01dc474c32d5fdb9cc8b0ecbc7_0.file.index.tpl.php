<?php /* Smarty version 3.1.24, created on 2016-03-31 13:44:48
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:40055528356fcffa05e0256_95949534%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2741ea194f8fae01dc474c32d5fdb9cc8b0ecbc7' => 
    array (
      0 => './templates/index.tpl',
      1 => 1459421084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40055528356fcffa05e0256_95949534',
  'variables' => 
  array (
    'countUsers' => 0,
    'countTrans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fcffa060d641_87630994',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fcffa060d641_87630994')) {
function content_56fcffa060d641_87630994 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '40055528356fcffa05e0256_95949534';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h1 class="page-header">Главная страница</h1>
Всего пользователей <?php echo $_smarty_tpl->tpl_vars['countUsers']->value;?>
 <br> Всего транзакций <?php echo $_smarty_tpl->tpl_vars['countTrans']->value;?>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>