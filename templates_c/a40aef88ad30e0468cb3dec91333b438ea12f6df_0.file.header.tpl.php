<?php /* Smarty version 3.1.24, created on 2015-07-04 11:36:12
         compiled from "./templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:183965396655979afc58cad1_86276005%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a40aef88ad30e0468cb3dec91333b438ea12f6df' => 
    array (
      0 => './templates/header.tpl',
      1 => 1435998969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183965396655979afc58cad1_86276005',
  'variables' => 
  array (
    'admin_url' => 0,
    'flash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55979afc6afeb3_66502611',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55979afc6afeb3_66502611')) {
function content_55979afc6afeb3_66502611 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '183965396655979afc58cad1_86276005';
?>

<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Flashok. Admin panel</title>

	    <!-- Bootstrap -->
	    <link href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
public/css/bootstrap.min.css" rel="stylesheet">
	    <link href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
public/css/general.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
	      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
	    <![endif]-->
  	</head>
  	<body>
	<?php echo $_smarty_tpl->getSubTemplate ("header.menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container-fluid">
	    <div class="row">
		    <!--
		    <div class="col-sm-3 col-md-2 sidebar">
			<?php echo $_smarty_tpl->getSubTemplate ("left.menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	        </div>
	        -->
	        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

				<?php if ($_smarty_tpl->tpl_vars['flash']->value['error']) {?>
					<div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['flash']->value['error'];?>
</div>
				<?php }?>          

				<?php if ($_smarty_tpl->tpl_vars['flash']->value['success']) {?>
					<div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['flash']->value['success'];?>
</div>
				<?php }

}
}
?>