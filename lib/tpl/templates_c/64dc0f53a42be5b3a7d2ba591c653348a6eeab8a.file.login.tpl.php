<?php /* Smarty version Smarty-3.1.1, created on 2012-12-04 14:12:36
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1752950be04d49617f8-02210359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1352567537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1752950be04d49617f8-02210359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
    'f_log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50be04d4bcc16',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50be04d4bcc16')) {function content_50be04d4bcc16($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>
Connecté:<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 <a href='?module=login&action=deconnect'>Logout</a>
<?php }else{ ?>
<?php echo $_smarty_tpl->tpl_vars['f_log']->value;?>

<?php }?>
<!-- Pas utiliser --><?php }} ?>