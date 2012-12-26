<?php /* Smarty version Smarty-3.1.1, created on 2012-12-26 12:22:46
         compiled from "modules\admModele\tpl\admModele-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2402650d5bdcfe30f95-13304849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b52300cf0e7ed428bf64fc3e5d3192c470ed873' => 
    array (
      0 => 'modules\\admModele\\tpl\\admModele-index.tpl',
      1 => 1356524564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2402650d5bdcfe30f95-13304849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50d5bdd054a6f',
  'variables' => 
  array (
    'marque' => 0,
    'id' => 0,
    'liste' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d5bdd054a6f')) {function content_50d5bdd054a6f($_smarty_tpl) {?>﻿<link rel="stylesheet" href="./styles/admModele-index.css"/>
<div id="mq"><?php echo $_smarty_tpl->tpl_vars['marque']->value->getNomMarque();?>
</div>

Info :  Cliquez sur le nom du modèle pour voir les voitures et pour acceder a leur suppression<br />
Double cliquez pour modifier le nom, le prix ou le taux	
<div class="button_add button"><a href="?module=admModele&action=add&op=add&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Ajouter</a></div>
<table align="center" valign="middle">
		<tr><th>Id</th><th>Modèle</th><th> Quantité Stock</th><th> Prix par jour</th><th>Taux de remise (%)</th><th>Modifier</th><th>Supprimer</th><th> Ajouter Voiture</th><th> Ajouter Photo</th></tr>
	
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['liste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
	<tr id="<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
"> <td id="id<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
</td> <td class="mod upd" tag="nomModele" id="<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->getNomModele();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value->getQteStock();?>
</td> <td tag="prix" class="upd"><?php echo $_smarty_tpl->tpl_vars['c']->value->getPrix();?>
</td> <td tag="tauxRemise" class="upd"><?php echo $_smarty_tpl->tpl_vars['c']->value->getTauxRemise();?>
</td> <td><a href="?module=admModele&action=add&op=update&idmod=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
&id=<?php echo $_smarty_tpl->tpl_vars['marque']->value->getIdMarque();?>
"><img src="./images/update.png"/></a></td> <td><a href="?module=admModele&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
" class="suppr"><img src="./images/delete.png"/></a></td> <td><a href="?module=admVoiture&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
" ><img src="./images/car_add.png"/></a></td><td><a href="?module=admModele&action=addPhoto&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->getIdModele();?>
"><img src="./images/photo.jpg"/></a></td></tr>
	<tr class="car"><td>ID Voiture</td><td>année</td><td>km</td></tr>
<?php } ?>
</table>

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
			
				
				
				var idModele=$(this).attr('id');
				$.ajax({
					type: 'GET',
					url: '?module=admVoiture&action=ajax&id='+$(this).attr('id'),
					dataType : 'json',	//Evite de faire $.parseJSON
					success: function(data, txtStatus, jqXHR){
						
						$('.ajax').html('');
							var i=0;
							var prompt="";
							var an=[];
							var km=[];
							var marq=[];
							for(i=0;i<data.length;i++)
							{
								$('.ajax').html($('.ajax').html()+"<br />Année : "+data[i]['annee']+"<br />Kilométrage :"+data[i]['km']+"<br />Description :"+data[i]['description']+"<br /><div class=\"sup_car button\" id="+i+"><a href=\"?module=admVoiture&action=delete&idModele="+idModele+"&idVoiture="+data[i]['idVoiture']+"\" >Supprimer</a></div>").show();
								//prompt+="<br /> Année : "+data[i]['annee']+"<br />Kilométrage :"+data[i]['km']+"<br />Description :"+data[i]['description']+"<br /><div class=\"sup_car\">Supprimer</div>";
							//On stock les informations concernant l'objet en cour d'affichage
								marq[i]=$('#mq').text();
								an[i]=data[i]['annee'];
								km[i]=data[i]['km'];
								
							}
							//On assigne une fonction évenementielle a chaque élement qui ont la classe .sup_car pour demander une confirmation avant la confirmation.
							$('.sup_car').click(function(){
								
									var j=$(this).attr('id');
									return confirm("Etes vous sur d'éffectuer la suppression de la "+marq[j]+" de "+an[j]+" avec " +km[j]+" km ?");
								});
							//$('.ajax').html(prompt).show();
							
					}
					
					
					
				
				});
				
			});
			});
			
			
		/* --- Variable de stockage temporaire --- */
		var quoi;
		var tag;
		var idactuel;
		var modif;
		var obj;
		var flag=false;
		/* --- On associe a chaque élement suceptible dêtre modifié une fonction sur les événement clique et blur. --- */
		$('.upd').dblclick(function(){
			if(!flag)
			{
				flag=true;
				quoi=$(this).html();
				if(!($(this).is(".inp")))
					$(this).html('<input type="text" value="'+quoi+'"/> ').toggleClass("inp");
				obj=$(this);	
				idactuel=$(this).parent().attr("id");
				tag=$(this).attr("tag");
				
				$(".upd input").keyup(function(e){
					if(e.keyCode == 13){
					modif=$(this).val();
					
					/* --- On procéde a l'update via une requete ajax ---- */
					$.getJSON("?module=admModele&action=ajax&id="+idactuel+"&what="+tag+"&mod="+modif,"",function(data){ 
						if(data=="ok") 
						{
							$(obj).html(modif).toggleClass("inp");
						}
						else
						{
							$(obj).html(quoi).toggleClass("inp");
							alert(data);
						}
						flag=false;
						
					});
					}
				});
			}
		
		})		
			
		
	});
	
</script><?php }} ?>