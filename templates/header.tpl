{* debug *}
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
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>
  	<body>
	{include file="header.menu.tpl"}
	<div class="container-fluid">
	    <div class="row">
		    <!--
		    <div class="col-sm-3 col-md-2 sidebar">
			{include file="left.menu.tpl"}
	        </div>
	        -->
	        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

				{if $flash.error}
					<div class="alert alert-danger" role="alert">{$flash.error}</div>
				{/if}          

				{if $flash.success}
					<div class="alert alert-success" role="alert">{$flash.success}</div>
				{/if}
