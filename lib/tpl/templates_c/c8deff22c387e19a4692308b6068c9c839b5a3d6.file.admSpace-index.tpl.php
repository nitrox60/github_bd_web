<?php /* Smarty version Smarty-3.1.1, created on 2012-12-22 13:34:38
         compiled from "modules\admSpace\tpl\admSpace-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2253150d5b6eed47392-63962504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8deff22c387e19a4692308b6068c9c839b5a3d6' => 
    array (
      0 => 'modules\\admSpace\\tpl\\admSpace-index.tpl',
      1 => 1355996790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2253150d5b6eed47392-63962504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50d5b6eeed005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d5b6eeed005')) {function content_50d5b6eeed005($_smarty_tpl) {?>﻿
<style>

h2
{
	margin-left:30%;
	border: 3px solid black;
	width: 35%;
	text-align:center;
	border-radius:8px 8px 8px;
	background: linear-gradient(#04BEED, #0383A3);
	background: -webkit-linear-gradient(#04BEED, #0383A3);
	background: -ms-linear-gradient(#04BEED, #0383A3);
	background: -moz-linear-gradient(#04BEED, #0383A3);
	background: -o-linear-gradient(#04BEED, #0383A3);
	margin-bottom: 10%;
}

img
{
	height: 40px;
	width: 50px;

}

.link
{
	margin-left: 10%;
}

.link a
{
	margin-bottom:3px;
	vertical-align:13px;
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
</style>
<h2>Espace administration</h2>

<span class="link">
	<img src="./images/admMarque.jpg"/><a href="?module=admMarque">Administration des marques</a>
</span>

<span class="link">
	<img src="./images/admClient.jpg"/><a href="?module=admClient">Administration des clients</a>
</span>


<div style="clear:both;"></div><?php }} ?>