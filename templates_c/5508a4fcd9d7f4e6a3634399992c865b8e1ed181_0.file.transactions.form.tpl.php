<?php /* Smarty version 3.1.24, created on 2016-04-02 09:37:46
         compiled from "./templates/transactions.form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:50818342256ff68ba25d768_81121426%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5508a4fcd9d7f4e6a3634399992c865b8e1ed181' => 
    array (
      0 => './templates/transactions.form.tpl',
      1 => 1459579058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50818342256ff68ba25d768_81121426',
  'variables' => 
  array (
    'aUserList' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56ff68ba2f79b8_98863800',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ff68ba2f79b8_98863800')) {
function content_56ff68ba2f79b8_98863800 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '50818342256ff68ba25d768_81121426';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row">
	<div class="col-md-6">
		<form class="form-horizontal" action="/transactions/add/" method="POST">
		  <div class="form-group">
		    <label for="first-name" class="col-sm-2 control-label">From User</label>
		    <div class="col-sm-10">
		     <select id="card-number-from" class="form-control" name="CardNumberFrom">
				<?php
$_from = $_smarty_tpl->tpl_vars['aUserList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$foreach_user_Sav = $_smarty_tpl->tpl_vars['user'];
?>			
				    <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['CardNumber'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['CardHolderName'];?>
</option>
				<?php
$_smarty_tpl->tpl_vars['user'] = $foreach_user_Sav;
}
?>			
			</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="last-name" class="col-sm-2 control-label">To User</label>
		    <div class="col-sm-10">
		    	<select id="card-number-to" class="form-control" name="CardNumberTo">
					<?php
$_from = $_smarty_tpl->tpl_vars['aUserList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$foreach_user_Sav = $_smarty_tpl->tpl_vars['user'];
?>			
					    <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['CardNumber'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['CardHolderName'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['user'] = $foreach_user_Sav;
}
?>			
				</select>
		    </div>
		  </div>		  
		  <div class="form-group">
		    <label for="amount" class="col-sm-2 control-label">Amount</label>
		    <div class="col-sm-10">
		      <input name="Amount" type="text" class="form-control" id="card-number" >
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