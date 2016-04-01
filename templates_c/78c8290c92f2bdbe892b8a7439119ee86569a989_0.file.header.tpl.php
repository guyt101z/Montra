<?php /* Smarty version 3.1.24, created on 2016-04-01 15:15:14
         compiled from "./templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:38597520056fe6652a5ae27_22006669%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78c8290c92f2bdbe892b8a7439119ee86569a989' => 
    array (
      0 => './templates/header.tpl',
      1 => 1459511418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38597520056fe6652a5ae27_22006669',
  'variables' => 
  array (
    'flash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe6652a93e06_12585727',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe6652a93e06_12585727')) {
function content_56fe6652a93e06_12585727 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '38597520056fe6652a5ae27_22006669';
?>

<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Montra</title>

	    <!-- Bootstrap -->
	    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
	    <link href="/public/css/general.css" rel="stylesheet">

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