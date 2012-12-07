<?php /* Smarty version Smarty-3.1.1, created on 2012-12-04 14:14:36
         compiled from "templates\erreur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2801250be054c320ad4-74295322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2801250be054c320ad4-74295322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50be054c40af2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50be054c40af2')) {function content_50be054c40af2($_smarty_tpl) {?><div class='echo' style='background:#FFF9C4;border:5px red dotted;margin-top:20px'>
<h1>Erreur</h1>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? "Le site a rencontré un problème." : $tmp);?>

</div><?php }} ?>