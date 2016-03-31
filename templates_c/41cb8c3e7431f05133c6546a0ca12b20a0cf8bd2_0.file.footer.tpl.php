<?php /* Smarty version 3.1.24, created on 2015-07-04 10:53:50
         compiled from "./templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3662112645597910e862630_68340905%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41cb8c3e7431f05133c6546a0ca12b20a0cf8bd2' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1435996348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3662112645597910e862630_68340905',
  'variables' => 
  array (
    'admin_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5597910e898559_38836894',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5597910e898559_38836894')) {
function content_5597910e898559_38836894 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3662112645597910e862630_68340905';
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