<?php /* Smarty version Smarty-3.1.1, created on 2013-02-26 18:23:42
         compiled from "modules\loc\tpl\loc-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3021951237b5f3f2642-41703443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154bf291037a37a9eda496c1e85fc48420e0a9a6' => 
    array (
      0 => 'modules\\loc\\tpl\\loc-index.tpl',
      1 => 1361903019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3021951237b5f3f2642-41703443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_51237b5f47bdb',
  'variables' => 
  array (
    'f_loc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51237b5f47bdb')) {function content_51237b5f47bdb($_smarty_tpl) {?>﻿<link rel="stylesheet" href="./styles/loc.css"/>
<a href="#?w=500" rel="popup_name" class="poplight">En savoir plus</a>
<div id="popup_name" class="popup_block">
	<h2>Vous n'êtes pas connecté</h2>
	<!-- <form id="f_co_pop" name="f_co_pop" method="post" enctype="text/plain" action="?module=login&action=coajax"> -->
	<fieldset>
	<label for="ndc_pop">Email</label><input   type="text" name="ndc_pop" id="ndc_pop"/>
	<label>mdp</label><input type="text" name="mdp_pop" id="mdp_pop"/>
	<label>&nbsp </label><input type="submit" name="sub_pop" id="sub_pop" value="Connexion" class="co_pop"/>
	<div id="error_pop"></div>
	</fieldset>
	<!-- </form> -->
</div>
<div id="test"></div>
<?php echo $_smarty_tpl->tpl_vars['f_loc']->value;?>

<div id="test2"><a href="#"></a></div>
<div id="car"></div>
<div id="info"></div>
<span id="load"></span>
<div style="clear:both;"></div>

<script src="./js/jquery-1.4.3.min.js"></script>
<script src="./js/loc.js"></script>
	<?php }} ?>