<?php /* Smarty version 3.1.24, created on 2016-04-02 09:35:49
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:55019862456ff68459c2ff4_69460453%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebfbf5517d6b500eb25b8f653c533c4330cd51d3' => 
    array (
      0 => './templates/index.tpl',
      1 => 1459578946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55019862456ff68459c2ff4_69460453',
  'variables' => 
  array (
    'countUsers' => 0,
    'countTrans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56ff6845ad1254_60477079',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ff6845ad1254_60477079')) {
function content_56ff6845ad1254_60477079 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '55019862456ff68459c2ff4_69460453';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h1 class="page-header">Главная страница</h1>
Всего пользователей <?php echo $_smarty_tpl->tpl_vars['countUsers']->value;?>
 <br> Всего транзакций <?php echo $_smarty_tpl->tpl_vars['countTrans']->value;?>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>