<?php /* Smarty version Smarty-3.1.1, created on 2013-02-19 13:28:50
         compiled from "modules\admLoc\tpl\admLoc-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10951227a9e6cd621-34012610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da57cf38c4037a002bd3cd0724d4ebf45ad04051' => 
    array (
      0 => 'modules\\admLoc\\tpl\\admLoc-index.tpl',
      1 => 1361280527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10951227a9e6cd621-34012610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_51227a9e7bc69',
  'variables' => 
  array (
    'liste' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51227a9e7bc69')) {function content_51227a9e7bc69($_smarty_tpl) {?>﻿

<style>
.loc
{
	background-color:white;
	border: 2px solid black;
	border-radius:10px ;
	width:50%;
	height:200px;
	margin-left:25%;
	margin-right:25%;
	margin-bottom:20px;
}

.header_loc
{	
	border-bottom:1px solid black;
	width:100%;
	height:30%;
}

.header_loc>span
{
	float:left;
	clear:both;
}

.gras
{
 text-decoration:underline;
 font-weight:bold;
}

.body_loc
{
	width:100%;
	height:70%;
}
.id_car
{
	margin-left:33%;
	display:inline-block;
	width:100%;
}

.nom_car
{	
	clear:both;	
	float:left;
}

.mod_car, .year_car
{
	float:left;
	clear:both;
}



</style>
		
	
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['liste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
	
<div class="loc"> 
	<div class="header_loc"> <span class="idloc"><span class="gras">Id Location</span>:<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdLoc();?>
 </span><span class="date_start"><span class="gras">Date du début de location</span>: <?php echo $_smarty_tpl->tpl_vars['c']->value->getDateLoc();?>
</span> <span class="date_stop"> <span class="gras">Date de fin de location </span>: <?php echo $_smarty_tpl->tpl_vars['c']->value->getDateRendu();?>
</span>

	</div>
	<div class="body_loc"><span class="id_car">Id de la voiture : <?php echo $_smarty_tpl->tpl_vars['c']->value->getIdVoiture();?>
</span><span class="nom_car"> Marque de la voiture: <?php echo $_smarty_tpl->tpl_vars['c']->value->marque->getNomMarque();?>
</span> <span class="mod_car">Modèle :<?php echo $_smarty_tpl->tpl_vars['c']->value->mod->getNomModele();?>
</span> <span class="year_car">Année:<?php echo $_smarty_tpl->tpl_vars['c']->value->car->getAnnee();?>
 </span>
	</div>
	
</div>
<?php } ?>

<div style="clear:both;"></div><?php }} ?>