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
	padding:10px;
}

.upd
{
	cursor:pointer;
}
</style>

<table align="center" valign="middle">
		<tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Rue</th><th>Code Postal</th><th>Ville</th><th>VIP</th><th>Date Inscription</th><th>Mail</th><th>Supprimer</th></tr>
	
{foreach $liste as $c}
	
	<tr id="{$c->getIdClient()}"> <td id="id{$c->getIdClient()}">{$c->getIdClient()}</td> <td tag="nom" class="upd">{$c->getNom()}</td><td tag="prenom" class="upd">{$c->getPrenom()}</td> <td tag="rue" class="upd">{$c->getRue()}</td> <td tag="codepostal" class="upd">{$c->getCodePostal()}</td> <td tag="ville" class="upd">{$c->getVille()}</td> <td tag="vip" class="upd">{$c->getVip()}</td><td>{$c->getDateInscription()}</td> <td tag="mail" class="upd" >{$c->getMail()}</td><td><a href="?module=admClient&action=delete&id={$c->getIdClient()}" class="suppr"><img src="./images/delete.png"/></a></td></tr>
{/foreach}
</table>
<div style="clear:both;"></div>

<script src="./js/jquery-1.4.3.min.js"></script>
<script>
	$(function(){
	/* --- Variable de stockage temporaire --- */
		var quoi;
		var tag;
		var idactuel;
		var modif;
		var obj;
		var flag=false;
		/* --- On associe a chaque élement suceptible dêtre modifié une fonction sur les événement clique et blur. --- */
		$('.upd').click(function(){
		if(!flag)
		{
		flag=true;
		 quoi=$(this).html();
			if(!($(this).is(".inp")))
				$(this).html('<input type="text" value="'+quoi+'"/> ').toggleClass("inp");
			obj=$(this);	
			 idactuel=$(this).parent().attr("id");
			tag=$(this).attr("tag");
			
			$(".upd input").blur(function(){
				modif=$(this).val();
				/* --- On procéde a l'update via une requete ajax ---- */
				$.getJSON("?module=admClient&action=ajax&id="+idactuel+"&what="+tag+"&mod="+modif,"",function(data){ 
				
					if( data=="ok") 
					{
						$(obj).html(modif).toggleClass("inp");
						
					}
					else
					{
					 $(obj).html(quoi).toggleClass("inp");
					
					}
					flag=false;
					
					});
				
			});
		}
		
		})
	
	
	
	
	});

</script>