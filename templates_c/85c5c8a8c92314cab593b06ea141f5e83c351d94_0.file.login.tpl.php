<?php /* Smarty version 3.1.24, created on 2015-06-24 15:45:23
         compiled from "./templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1537384069558aa663323067_93334279%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85c5c8a8c92314cab593b06ea141f5e83c351d94' => 
    array (
      0 => './templates/login.tpl',
      1 => 1435148601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1537384069558aa663323067_93334279',
  'variables' => 
  array (
    'admin_url' => 0,
    'back_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558aa6633ca6d8_39532713',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558aa6633ca6d8_39532713')) {
function content_558aa6633ca6d8_39532713 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1537384069558aa663323067_93334279';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <form class="form-signin" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
login" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputLogin" class="sr-only">Login</label>
        <input type="text" name="username" id="inputLogin" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <input type="hidden" name="back_url" value="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>