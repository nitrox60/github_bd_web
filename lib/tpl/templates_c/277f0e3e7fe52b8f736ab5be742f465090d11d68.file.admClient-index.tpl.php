<?php /* Smarty version Smarty-3.1.1, created on 2012-12-20 09:58:15
         compiled from "modules\admClient\tpl\admClient-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2178450d227ecc60862-93322330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '277f0e3e7fe52b8f736ab5be742f465090d11d68' => 
    array (
      0 => 'modules\\admClient\\tpl\\admClient-index.tpl',
      1 => 1355997493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2178450d227ecc60862-93322330',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50d227ecddb32',
  'variables' => 
  array (
    'liste' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d227ecddb32')) {function content_50d227ecddb32($_smarty_tpl) {?><style>
table
{
border:1px solid black;
border-collapse: collapse;
text-align:center;
}
th, td
{
	border: 1px solid black;
	padding:10px;
}
</style>

<table align="center" valign="middle">
		<tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Rue</th><th>Code Postal</th><th>Ville</th><th>VIP</th><th>Date Inscription</th><th>Mail</th><th>Supprimer</th></tr>
	
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['liste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
	
	<tr> <td id="id<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdClient();?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->getIdClient();?>
</td> <td id="<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdClient();?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->getNom();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getPrenom();?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getRue();?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getCodePostal();?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getVille();?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getVip();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getDateInscription();?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getMail();?>
</td><td><a href="?module=admClient&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdClient();?>
" class="suppr"><img src="./images/delete.png"/></a></td></tr>
<?php } ?>
</table>
<div style="clear:both;"></div><?php }} ?>