<style>
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

.button
{
cursor: pointer;
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



.car
{
	display:none;
}

.ajax
{
	display:none;
}

h2
{

	margin-left:30%;
	border: 3px solid black;
	width: 35%;
	text-align:center;
	border-radius:8px 8px 8px;
	background: linear-gradient(#04BEED, #0383A3);
	background: -webkit-linear-gradient(#04BEED, #0383A3);
	background: -ms-linear-gradient(#04BEED, #0383A3);
	background: -moz-linear-gradient(#04BEED, #0383A3);
	background: -o-linear-gradient(#04BEED, #0383A3);

}

.sup_car
{
	width:20%;
	text-align:center;
	text-decoration: none;
	color: black;
	border : 1 px solid black;
	border-radius: 6px 6px 6px ;
	padding: 2px;
	background: linear-gradient(#FF0004, #B20000);
	background: -webkit-linear-gradient(#FF0004, #B20000);
	background: -ms-linear-gradient(#FF0004, #B20000);
	background: -moz-linear-gradient(#FF0004, #B20000);
	background: -o-linear-gradient(#FF0004, #B20000);
}

</style>
<h2>Administration <span id="mq">{$marque->getNomMarque()}</span></h2>

Info : Clique sur le nom du modèle pour voir les voitures et pour acceder a la suppresion
<div class="button_add button"><a href="?module=admModele&action=add&op=add&id={$id}">Ajouter</a></div>
<table align="center" valign="middle">
		<tr><th>Id</th><th>Modèle</th><th> Quantité Stock</th><th> Prix par jour</th><th>Taux de remise (%)</th><th>Modifier</th><th>Supprimer</th><th> Ajouter Voiture</th><th> Ajouter Photo</th></tr>
	
{foreach $liste as $c}
	<tr> <td id="id{$c->getIdModele()}">{$c->getIdModele()}</td> <td class="mod button" id="{$c->getIdModele()}">{$c->getNomModele()}</td><td>{$c->getQteStock()}</td> <td>{$c->getPrix()}</td> <td>{$c->getTauxRemise()}</td> <td><a href="?module=admModele&action=add&op=update&idmod={$c->getIdModele()}&id={$marque->getIdMarque()}"><img src="./images/update.png"/></a></td> <td><a href="?module=admModele&action=delete&id={$c->getIdModele()}" class="suppr"><img src="./images/delete.png"/></a></td> <td><a href="?module=admVoiture&id={$c->getIdModele()}" ><img src="./images/car_add.png"/></a></td><td><a href="?module=admModele&action=addPhoto&id={$c->getIdModele()}">Ajouter Photo</a></td></tr>
	<tr class="car"><td>ID Voiture</td><td>année</td><td>km</td></tr>
{/foreach}
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
								$('.ajax').html($('.ajax').html()+"<br /> Année : "+data[i]['annee']+"<br />Kilométrage :"+data[i]['km']+"<br />Description :"+data[i]['description']+"<br /><div class=\"sup_car button\" id="+i+">Supprimer</div>").show();
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
			
			
				
			
		
	});
	
</script>