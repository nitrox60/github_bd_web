<?php /* Smarty version Smarty-3.1.1, created on 2013-02-25 11:02:48
         compiled from "modules\login\tpl\login-valide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25994512b44d81e0960-83386841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3cf28f1eef16748277a4d3d7556f5c3227f74a8' => 
    array (
      0 => 'modules\\login\\tpl\\login-valide.tpl',
      1 => 1352563429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25994512b44d81e0960-83386841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
    'nom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_512b44d824b3b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512b44d824b3b')) {function content_512b44d824b3b($_smarty_tpl) {?>﻿<br />
<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 est maintenant connecté<br />
<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 est votre nom!
<div style='clear:both'></div><?php }} ?>