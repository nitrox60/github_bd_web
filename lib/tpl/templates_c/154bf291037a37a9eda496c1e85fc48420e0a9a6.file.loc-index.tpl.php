<?php /* Smarty version Smarty-3.1.1, created on 2013-02-07 20:51:09
         compiled from "modules\loc\tpl\loc-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4945511413bd3cc1e9-51965727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154bf291037a37a9eda496c1e85fc48420e0a9a6' => 
    array (
      0 => 'modules\\loc\\tpl\\loc-index.tpl',
      1 => 1359971446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4945511413bd3cc1e9-51965727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'f_loc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_511413bd465a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511413bd465a1')) {function content_511413bd465a1($_smarty_tpl) {?>﻿<link rel="stylesheet" href="./styles/loc.css"/>
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