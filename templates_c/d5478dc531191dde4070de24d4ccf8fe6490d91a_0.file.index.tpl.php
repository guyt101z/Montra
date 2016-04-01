<?php /* Smarty version 3.1.24, created on 2016-04-01 15:15:14
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:37492811156fe6652a22d42_82160096%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5478dc531191dde4070de24d4ccf8fe6490d91a' => 
    array (
      0 => './templates/index.tpl',
      1 => 1459511418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37492811156fe6652a22d42_82160096',
  'variables' => 
  array (
    'countUsers' => 0,
    'countTrans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe6652a4ff92_16417284',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe6652a4ff92_16417284')) {
function content_56fe6652a4ff92_16417284 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '37492811156fe6652a22d42_82160096';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h1 class="page-header">Главная страница</h1>
Всего пользователей <?php echo $_smarty_tpl->tpl_vars['countUsers']->value;?>
 <br> Всего транзакций <?php echo $_smarty_tpl->tpl_vars['countTrans']->value;?>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>