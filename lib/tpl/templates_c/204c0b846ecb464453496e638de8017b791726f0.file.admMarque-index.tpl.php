<?php /* Smarty version Smarty-3.1.1, created on 2012-12-10 13:04:14
         compiled from "modules\admMarque\tpl\admMarque-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1096750c5ddce756a94-64438543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '204c0b846ecb464453496e638de8017b791726f0' => 
    array (
      0 => 'modules\\admMarque\\tpl\\admMarque-index.tpl',
      1 => 1353617214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1096750c5ddce756a94-64438543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'liste' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50c5ddce8c97b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c5ddce8c97b')) {function content_50c5ddce8c97b($_smarty_tpl) {?>﻿<a href="?module=admMarque&action=add"><img src="./images/boutton.jpg"/></a>

<table>
<tr><th>Id</th><th>Marque</th><th>Modifier</th><th>Supprimer</th></tr>
	<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['liste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getIdMarque();?>
</td><td><a href="?module=admModele&action=index&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdMarque();?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->getNomMarque();?>
</a></td><td><a href="?module=admMarque&action=add&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdMarque();?>
"><img src="./images/update.png" alt="buttonUpdate"/></a></td><td><a href="?module=admMarque&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdMarque();?>
" class="suppr" onclick="return confirm('Etes-vous sur de vouloir supprimer cette marque?')"><img src="./images/delete.png" alt="buttonUpdate"/></a></td></tr>
	<?php } ?>
<table>


<?php }} ?>