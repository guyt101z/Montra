<?php /* Smarty version 3.1.24, created on 2016-04-01 02:27:26
         compiled from "./templates/user.form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:169713172556fdb25ee05620_19605381%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22add829b53e0d2193a1fcb991a7ad7e2f106773' => 
    array (
      0 => './templates/user.form.tpl',
      1 => 1459466838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169713172556fdb25ee05620_19605381',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fdb25ee20ac6_61079436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fdb25ee20ac6_61079436')) {
function content_56fdb25ee20ac6_61079436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '169713172556fdb25ee05620_19605381';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row">
	<div class="col-md-6">
		<form class="form-horizontal" action="/user/add/" method="POST">
		  <div class="form-group">
		    <label for="first-name" class="col-sm-2 control-label">First Name</label>
		    <div class="col-sm-10">
		      <input name="FirstName" type="text" class="form-control" id="first-name" >
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="last-name" class="col-sm-2 control-label">Last Name</label>
		    <div class="col-sm-10">
		      <input name="LastName" type="text" class="form-control" id="last-name" >
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>
	</div>
	<div class="col-md-6">.col-md-6</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>