<?php /* Smarty version 3.1.24, created on 2016-04-01 16:02:36
         compiled from "./templates/user.form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9741441056fe716c215c12_25722309%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87cf82a859cec7a6b8e56034b851baaa76189a2d' => 
    array (
      0 => './templates/user.form.tpl',
      1 => 1459515705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9741441056fe716c215c12_25722309',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe716c25f6f9_88292770',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe716c25f6f9_88292770')) {
function content_56fe716c25f6f9_88292770 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9741441056fe716c215c12_25722309';
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
		    <label for="card-number" class="col-sm-2 control-label">Card Number</label>
		    <div class="col-sm-10">
		      <input name="CardNumber" type="text" class="form-control" id="card-number" >
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Добавить</button>
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