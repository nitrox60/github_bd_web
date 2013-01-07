<?php /* Smarty version Smarty-3.1.1, created on 2013-01-07 08:37:45
         compiled from "modules\loc\tpl\loc-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2654050d5b781ae0df0-42775933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154bf291037a37a9eda496c1e85fc48420e0a9a6' => 
    array (
      0 => 'modules\\loc\\tpl\\loc-index.tpl',
      1 => 1356526852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2654050d5b781ae0df0-42775933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50d5b781ed0eb',
  'variables' => 
  array (
    'f_loc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d5b781ed0eb')) {function content_50d5b781ed0eb($_smarty_tpl) {?>﻿<link rel="stylesheet" href="./styles/loc.css"/>

<?php echo $_smarty_tpl->tpl_vars['f_loc']->value;?>

<div id="sel"></div>
<div id="car"></div>
<span></span>
<div style="clear:both;"></div>

<script src="./js/jquery-1.4.3.min.js"></script>
<script src="./js/loc.js"></script>
	<?php }} ?>