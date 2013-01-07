<?php /* Smarty version Smarty-3.1.1, created on 2012-12-26 12:41:25
         compiled from "modules\inscription\tpl\inscription-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:563050d5b753f27477-60020339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90bb402742a30a4eeb4baa2957f4e5b9221ed3c7' => 
    array (
      0 => 'modules\\inscription\\tpl\\inscription-index.tpl',
      1 => 1356525552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '563050d5b753f27477-60020339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50d5b7540e667',
  'variables' => 
  array (
    'f_ins' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d5b7540e667')) {function content_50d5b7540e667($_smarty_tpl) {?>﻿


Inscription :
<?php echo $_smarty_tpl->tpl_vars['f_ins']->value;?>



<div style="clear:both;"></div>
<script src="./js/jquery-1.4.3.min.js"></script>
<script src="./js/inscription.js"></script>
<?php }} ?>