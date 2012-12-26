<?php /* Smarty version Smarty-3.1.1, created on 2012-12-25 22:28:54
         compiled from "templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:499250d5b6eef18be7-56145985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aae8c641d21506c83b2eef3095b796e7ec90482' => 
    array (
      0 => 'templates\\main.tpl',
      1 => 1356474494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '499250d5b6eef18be7-56145985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50d5b6ef34be2',
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
<?php if ($_valid && !is_callable('content_50d5b6ef34be2')) {function content_50d5b6ef34be2($_smarty_tpl) {?><!-- start template-->
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
/*Code Css pour les boutons---- */
		#menu{
			background:#565656;
			height:30pt;	
			padding:5px;
			margin-top:5%;
			padding-left:25%;
			
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
			line-height:35pt;
			color:white;
		
			


		}
		
		
/*---------------------	*/
		
		#login{
			background:#333;
			float:right;
			padding-right:5px;
			padding-left:5px;
			margin-top:3px;
			color:white;

		}
		#ifLog>a
		{
			text-align:center;
			text-decoration: none;
			color: black;
			border : 1 px solid black;
			border-radius: 6px 6px 6px ;
			padding: 2px;
			background: linear-gradient(#FF0004, #B20000);
			background: -webkit-linear-gradient(#FF0004, #B20000);
			background: -ms-linear-gradient(#FF0004, #B20000);
			background: -moz-linear-gradient(#FF0004, #B20000);
			background: -o-linear-gradient(#FF0004, #B20000);
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
			<a href="?module=car">Nos voitures</a>
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