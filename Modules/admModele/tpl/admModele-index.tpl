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
<h2>{$marque->getNomMarque()}</h2>
<div class="button_add"><a href="?module=admModele&action=add&op=add&id={$id}">Ajouter</a></div>
<table align="center" valign="middle">
		<tr><th>Id</th><th>Modèle</th><th> Quantité Stock</th><th> Prix par jour</th><th>Taux de remise (%)</th><th>Modifier</th><th>Supprimer</th><th> Ajouter Voiture</th><th> Ajouter Photo</th></tr>
	
{foreach $liste as $c}
	<tr> <td id="id{$c->getIdModele()}">{$c->getIdModele()}</td> <td class="mod" id="{$c->getIdModele()}">{$c->getNomModele()}</td><td>{$c->getQteStock()}</td> <td>{$c->getPrix()}</td> <td>{$c->getTauxRemise()}</td> <td><a href="?module=admModele&action=add&op=update&idmod={$c->getIdModele()}&id={$marque->getIdMarque()}"><img src="./images/update.png"/></a></td> <td><a href="?module=admModele&action=delete&id={$c->getIdModele()}" class="suppr"><img src="./images/delete.png"/></a></td> <td><a href="?module=admVoiture&id={$c->getIdModele()}" ><img src="./images/car_add.png"/></a></td><td><a href="?module=admModele&action=addPhoto&id={$c->getIdModele()}">Ajouter Photo</a></td></tr>
	<tr class="car"><td>ID Voiture</td><td>année</td><td>km</td></tr>
{/foreach}
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
	
</script>