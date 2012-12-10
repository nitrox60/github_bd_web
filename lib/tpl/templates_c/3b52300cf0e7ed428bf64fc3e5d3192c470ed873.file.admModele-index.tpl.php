<?php /* Smarty version Smarty-3.1.1, created on 2012-12-10 13:04:17
         compiled from "modules\admModele\tpl\admModele-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2861250c5ddd1444d04-49187198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b52300cf0e7ed428bf64fc3e5d3192c470ed873' => 
    array (
      0 => 'modules\\admModele\\tpl\\admModele-index.tpl',
      1 => 1353946680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2861250c5ddd1444d04-49187198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'marque' => 0,
    'id' => 0,
    'liste' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50c5ddd170cf6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c5ddd170cf6')) {function content_50c5ddd170cf6($_smarty_tpl) {?>﻿<style>
table
{
border:1px solid black;
border-collapse: collapse;
text-align:center;
}
th, td
{
	border: 1px solid black;
}

a
{
	
	text-decoration:none;
	
}



.button_add
{
	border:2px solid black;
	border-radius:3px 3px 3px;
	background-color:rgba(11,232,0,0.8);
	width:8%;
	text-align:center;
	padding:2px;
	margin-left:10px;
	margin-bottom:10px;
	color:black;
}

.button_add:hover
{
	box-shadow: 2px 2px 2px black;
	border-radius: 10px 10px 10px;
	text-shadow:1px 1px 1px white,
				2px 2px 2px white,
				1px 1px 1px white;
	background: -webkit-linear-gradient(rgba(11,232,0,0.8), rgba(0,84,2,1));
   background:    -moz-linear-gradient(rgba(11,232,0,0.8), rgba(0,84,2,1));
   background:     -ms-linear-gradient(rgba(11,232,0,0.8), rgba(0,84,2,1));
   background:      -o-linear-gradient(rgba(11,232,0,0.8), rgba(0,84,2,1));
   background: linear-gradient(rgba(11,232,0,0.8), rgba(0,84,2,1));
   
   width:10%;
   -webkit-transition: border-radius 0.5s,background 0.5s, width 0.2s ;
	-moz-transition: border-radius 0.5s,background 0.5s, width 0.2s ;	
	-ms-transition: border-radius 0.5s,background 0.5s, width 0.2s ;
	-o-transition: border-radius 0.5s,background 0.5s, width 0.2s ;	
	
	transition: border-radius 0.5s,background 0.5s, width 0.2s ;
}

h2
{
	margin-left:33%;
}

th, td
{
	padding:10px;
}

#test
{
	background-color:red;
	border-radius:10px 10px 10px;
	box-shadow: 2px 2px 2px black,
				1px 1px 1px white;
			width:10%;
			border: 2px solid black;
			text-align:center;
			color:white;
		
}

#test:hover
{
	width:15%;
	-webkit-transition: width 1s;
	transition: width 1s;
	text-shadow: 3px 3px 3px white;
	color:black;
}

.car
{
	display:none;
}

.ajax
{
	display:none;
}

</style>
<h2><?php echo $_smarty_tpl->tpl_vars['marque']->value->getNomMarque();?>
</h2>
<div class="button_add"><a href="?module=admModele&action=add&op=add&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Ajouter</a></div>
<table align="center" valign="middle">
		<tr><th>Id</th><th>Modèle</th><th> Quantité Stock</th><th> Prix par jour</th><th>Taux de remise (%)</th><th>Modifier</th><th>Supprimer</th><th> Ajouter Voiture</th><th> Ajouter Photo</th></tr>
	
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['liste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
	<tr> <td id="id<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
</td> <td class="mod" id="<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->getNomModele();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getQteStock();?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getPrix();?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['c']->value->getTauxRemise();?>
</td> <td><a href="?module=admModele&action=add&op=update&idmod=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
&id=<?php echo $_smarty_tpl->tpl_vars['marque']->value->getIdMarque();?>
"><img src="./images/update.png"/></a></td> <td><a href="?module=admModele&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
" class="suppr"><img src="./images/delete.png"/></a></td> <td><a href="?module=admVoiture&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
" ><img src="./images/car_add.png"/></a></td><td><a href="?module=admModele&action=addPhoto&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
">Ajouter Photo</a></td></tr>
	<tr class="car"><td>ID Voiture</td><td>année</td><td>km</td></tr>
<?php } ?>
</table>

<div id="test">JJJ</div>
<div class="ajax"></div>
<div style="clear:both;"></div>
<script src="./js/jquery-1.4.3.min.js"></script>
<script>

	$(function(){
	
		$('.suppr').click(function(e){
			return confirm("Etes-vous sur de supprimer "+$('.suppr').val());
		});
		
		
			
			
			$('.mod').each(function(){
				$(this).click(function(){
					
				//$('.ajax').html('je suis mod '+$(this).text()+' et mon id est '+$(this).attr('id')+'<br />').show();
			
				
				
					
				$.ajax({
					type: 'GET',
					url: '?module=admVoiture&action=ajax&id='+$(this).attr('id'),
					
					dataType : 'json',	//Evite de faire $.parseJSON
					success: function(data, txtStatus, jqXHR){
						$('.ajax').html('');
							var i=0;
							for(i=0;i<data.length;i++)
							{
								$('.ajax').html($('.ajax').html()+"<br /> Année : "+data[i]['annee']+"<br />Kilométrage :"+data[i]['km']+"<br />Description :"+data[i]['description']+"<br />").show();
							}
					}
					
					
					
				
				});
				
			});
			});
			
			
				
			
		
	});
	
</script><?php }} ?>