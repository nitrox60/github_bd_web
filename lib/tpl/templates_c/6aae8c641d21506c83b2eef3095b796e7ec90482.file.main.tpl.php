<?php /* Smarty version Smarty-3.1.1, created on 2012-12-20 10:35:31
         compiled from "templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3023950be050517c341-08230662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aae8c641d21506c83b2eef3095b796e7ec90482' => 
    array (
      0 => 'templates\\main.tpl',
      1 => 1355999728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3023950be050517c341-08230662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50be0505310a0',
  'variables' => 
  array (
    'titre' => 0,
    'bloc_login' => 0,
    'login' => 0,
    'messages' => 0,
    'module' => 0,
    'action' => 0,
    'bloc_contenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50be0505310a0')) {function content_50be0505310a0($_smarty_tpl) {?><!-- start template-->
<html>
	<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
	
	<style>
		*{
			font-family:helvetica;	
			padding:0px;
			margin:0px;
		}
		
		body{
			background:	-webkit-gradient(linear, left top, left bottom, from(#A5AA95), to(#6F7364));
		}

		#menu{
			background:black;
			height:14pt;	
			padding:5px;
		}
	
		
		#login{
			background:#333;
			float:right;
			padding-right:5px;
			padding-left:5px;
			margin-top:3px;
			color:white;
		}
		#page{
			width:1000px;
			margin:auto;	
			background:white;
		}
	
		#contenu{
			background:white;
			padding:5px;
		}
		#module{
			border:5px #CCF solid;	
		}
		label{
			width:150px;
			float:left;clear:left;	
			margin:4pt;
			text-align:right;
			
		}
		
		#contenu option, #contenu input, #contenu select, #contenu textarea{
			color:#353730;
			font-size:10pt;	
			margin:4pt;
			padding:4pt;
			border:1px #868A78 solid;
			border-radius: 4px;			
		}

		
		#contenu input,#contenu select, #contenu textarea{
			float:left;
		}
		#zonemessage{
			background:#E4FFB4;
			border:5px #99AA78 solid;
			padding:20px;	
		}
		
		span{
			float:left;	
		}
		
		#ifLog
		{
		float:right;
			color:white;
		}
		
		#menu>a
		{


			
			text-align:center;
			border-radius:8px 8px 8px;
			background: linear-gradient(#04BEED, #0383A3);
			background: -webkit-linear-gradient(#04BEED, #0383A3);
			background: -ms-linear-gradient(#04BEED, #0383A3);
			background: -moz-linear-gradient(#04BEED, #0383A3);
			background: -o-linear-gradient(#04BEED, #0383A3);
			border:1px gray solid;
			
			padding:0 5  0 5;
			text-decoration:none;
			line-height:12pt;
			color:white;
			


		}
	
	</style>
	<link rel='stylesheet' href='styles/smoothness/jquery-ui-1.8.5.custom.css' />
	<link rel="icon" type="image/png" href="./images/favicon.ico" />
	</head>
	<body>
	<div id='page'>
		<div id='login'>
			<?php echo $_smarty_tpl->tpl_vars['bloc_login']->value;?>

		</div>
	
		<div id='menu'>
			
			
			<a href="?module=login">Login</a>
			<a href="?module=inscription">Inscription</a>
			<a href="?module=admSpace">Administration</a>
			<a href="?module=loc">Location</a>
			<span id="ifLog">
			<?php if ((isset($_smarty_tpl->tpl_vars['login']->value))){?>
				Connecté :<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
<a href='?module=login&action=deconnect'>Logout</a><?php }?></span>
			
		</div>
		
		
	
		<div id='zonemessage'>
			Message ajouté avec $this->site->ajouter_message("");
			    <?php echo $_smarty_tpl->tpl_vars['messages']->value;?>

		</div>
		
		<div id='contenu'>
			Dans cette zone, on affiche le contenu généré par le module <b><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
()</b>
			<div id='module'>

				<?php echo $_smarty_tpl->tpl_vars['bloc_contenu']->value;?>

			</div>
		</div>
	</div>
	</body>
		
</html>
<!-- end template--><?php }} ?>