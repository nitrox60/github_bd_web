<?php /* Smarty version Smarty-3.1.1, created on 2013-02-18 19:01:22
         compiled from "templates\erreur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783351227a82003f68-33968808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd211a162f6574be7b02e819d20d9c79bf073fb' => 
    array (
      0 => 'templates\\erreur.tpl',
      1 => 1320929308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783351227a82003f68-33968808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_51227a8212883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51227a8212883')) {function content_51227a8212883($_smarty_tpl) {?><div class='echo' style='background:#FFF9C4;border:5px red dotted;margin-top:20px'>
<h1>Erreur</h1>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? "Le site a rencontré un problème." : $tmp);?>

</div><?php }} ?>