<?php /* Smarty version Smarty-3.1.1, created on 2013-03-05 10:04:39
         compiled from "templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2599051323f5ab9e031-13517489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aae8c641d21506c83b2eef3095b796e7ec90482' => 
    array (
      0 => 'templates\\main.tpl',
      1 => 1362477875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2599051323f5ab9e031-13517489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_51323f5ac69a5',
  'variables' => 
  array (
    'titre' => 0,
    'login' => 0,
    'messages' => 0,
    'module' => 0,
    'action' => 0,
    'bloc_contenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51323f5ac69a5')) {function content_51323f5ac69a5($_smarty_tpl) {?><!-- start template-->
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
		
	
		<div id='menu'>
			
			<a href="?module=loc&action=mail">Mail</a>
			<a href="?module=login">Login</a>
			<a href="?module=inscription">Inscription</a>
			<a href="?module=admSpace">Administration</a>
			<a href="?module=loc">Location</a>
			<a href="?module=car">Nos voitures</a>
			<span id="ifLog">
			<?php if ((isset($_smarty_tpl->tpl_vars['login']->value))){?>
				Connecté :<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
<a href='?module=login&action=deconnect'>Logout</a>
				<?php }else{ ?><a href="#?w=500" rel="popup_name" class="poplight" >Connexion</a> 
				<?php }?></span>
			
		</div>
		
		
	
		<div id='zonemessage'>
			<!-- Message ajouté avec $this->site->ajouter_message(""); -->
			    <?php echo $_smarty_tpl->tpl_vars['messages']->value;?>

				<img src="./images/ban.jpeg" style="width:104%; margin:-2%;margin-bottom:-4%;"/>
		</div>
		
		<div id='contenu'>
			<!-- Dans cette zone, on affiche le contenu généré par le module <b><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
()</b>-->
			<div id='module'>

				<?php echo $_smarty_tpl->tpl_vars['bloc_contenu']->value;?>

			</div>
		</div>
		
		<!-- informations footer -->
	<div id="footer">
	<div id="infofoot"><a href="#"> Remerciement</a> <a href="#">Contact</a> <a href="#">Nos adresses</a> <a href="#">Mentions légales</a></div>
	<div id="madeby">Made By TAYAA-DALMAS Corporation. All Right Reserved</div>
	</div>
	</div>
	</body>
	
		
</html>
<!-- end template--><?php }} ?>