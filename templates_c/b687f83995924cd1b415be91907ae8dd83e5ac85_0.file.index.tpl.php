<?php /* Smarty version 3.1.24, created on 2015-06-30 14:04:41
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:704087747559277c9226884_41349368%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b687f83995924cd1b415be91907ae8dd83e5ac85' => 
    array (
      0 => './templates/index.tpl',
      1 => 1435144943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704087747559277c9226884_41349368',
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_559277c9399cb7_29163391',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559277c9399cb7_29163391')) {
function content_559277c9399cb7_29163391 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '704087747559277c9226884_41349368';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h1 class="page-header">Dashboard</h1>
Hello <?php echo $_smarty_tpl->tpl_vars['main']->value;?>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>