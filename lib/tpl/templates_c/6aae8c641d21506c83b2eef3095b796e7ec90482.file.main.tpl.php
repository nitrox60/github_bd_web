<?php /* Smarty version Smarty-3.1.1, created on 2013-02-07 20:51:09
         compiled from "templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6070511413bd4899c4-78300974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aae8c641d21506c83b2eef3095b796e7ec90482' => 
    array (
      0 => 'templates\\main.tpl',
      1 => 1356525050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6070511413bd4899c4-78300974',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_511413bd5545d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511413bd5545d')) {function content_511413bd5545d($_smarty_tpl) {?><!-- start template-->
<html>
	<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
	
	
	<link rel='stylesheet' href='styles/smoothness/jquery-ui-1.8.5.custom.css' />
	<link rel='stylesheet' href='styles/main.css' />
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