<?php /* Smarty version 3.1.24, created on 2016-03-30 09:00:56
         compiled from "./templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48734369856fb6b99005037_70590633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f565b7209b5c0eb170c8ce0669e1b115bb04039' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1442209577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48734369856fb6b99005037_70590633',
  'variables' => 
  array (
    'admin_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fb6b990158e2_42241080',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fb6b990158e2_42241080')) {
function content_56fb6b990158e2_42241080 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48734369856fb6b99005037_70590633';
?>

</div>
</div>
</div>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
public/js/validator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
public/js/game.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>