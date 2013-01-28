<?php /* Smarty version Smarty-3.1.1, created on 2013-01-28 18:49:13
         compiled from "modules\car\tpl\car-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2229050da28ac10f3e6-23700551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9242195ebc3a579d25cde1efdd6d656a343453e1' => 
    array (
      0 => 'modules\\car\\tpl\\car-index.tpl',
      1 => 1359397919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2229050da28ac10f3e6-23700551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50da28ac20486',
  'variables' => 
  array (
    'photo' => 0,
    'p' => 0,
    'com' => 0,
    'c' => 0,
    'f_com' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50da28ac20486')) {function content_50da28ac20486($_smarty_tpl) {?>
<style>
	.image
	{
		height:57px;
		width:100px;
		cursor:pointer;
	}
	#big
	{
		height:350px;
		width:630px;
		display: block; 
		margin: 0 auto; 
	}
	table.tabcom
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

<div id="sel"></div>
<div style="clear:both;"></div>
<div id="min" tag="tagok">
	<table class=ok><tr>
	<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
		<td><img id=<?php echo $_smarty_tpl->tpl_vars['p']->value->getIdImage();?>
 class=image src=./images/<?php echo $_smarty_tpl->tpl_vars['p']->value->getIdImage();?>
.jpg /></td>
	<?php } ?>
	</tr></table></div>
<div id="photo"></div>
<div id="bcom">

<div id="com"><table classe="tabcom">
	<tr><th>IdClient</th><th>DateCom</th><th>Contenu</th><th>Note</th></tr>
	<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['com']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getIdClient();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getDateCom();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getContenu();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getNote();?>
</td></tr>
	<?php } ?>
	</table></div>
<div id="addcom"><?php echo $_smarty_tpl->tpl_vars['f_com']->value;?>
</div>

</div>
<div style="clear:both;"></div>
<script src="./js/jquery-1.4.3.min.js"></script>
<script>
	$(function(){
		$('img').live('click', function(){
			var image='';
            $var=$(this).attr('src');
			image='<img id="big" src='+$var+' />'
			$('#photo').html(image).show(1000);
        });
	});
</script><?php }} ?>