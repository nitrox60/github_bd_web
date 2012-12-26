<link rel="stylesheet" href="./styles/admModele-index.css"/>
<div id="mq">{$marque->getNomMarque()}</div>

Info :  Cliquez sur le nom du modèle pour voir les voitures et pour acceder a leur suppression<br />
Double cliquez pour modifier le nom, le prix ou le taux	
<div class="button_add button"><a href="?module=admModele&action=add&op=add&id={$id}">Ajouter</a></div>
<table align="center" valign="middle">
		<tr><th>Id</th><th>Modèle</th><th> Quantité Stock</th><th> Prix par jour</th><th>Taux de remise (%)</th><th>Modifier</th><th>Supprimer</th><th> Ajouter Voiture</th><th> Ajouter Photo</th></tr>
	
{foreach $liste as $c}
	<tr id="{$c->getIdModele()}"> <td id="id{$c->getIdModele()}">{$c->getIdModele()}</td> <td class="mod upd" tag="nomModele" id="{$c->getIdModele()}">{$c->getNomModele()}</td><td>{$c->getQteStock()}</td> <td tag="prix" class="upd">{$c->getPrix()}</td> <td tag="tauxRemise" class="upd">{$c->getTauxRemise()}</td> <td><a href="?module=admModele&action=add&op=update&idmod={$c->getIdModele()}&id={$marque->getIdMarque()}"><img src="./images/update.png"/></a></td> <td><a href="?module=admModele&action=delete&id={$c->getIdModele()}" class="suppr"><img src="./images/delete.png"/></a></td> <td><a href="?module=admVoiture&id={$c->getIdModele()}" ><img src="./images/car_add.png"/></a></td><td><a href="?module=admModele&action=addPhoto&id={$c->getIdModele()}"><img src="./images/photo.jpg"/></a></td></tr>
	<tr class="car"><td>ID Voiture</td><td>année</td><td>km</td></tr>
{/foreach}
</table>

<div class="ajax"></div>
<div style="clear:both;"></div>
<script src="./js/jquery-1.4.3.min.js"></script>
<script src="./js/admModele-index.js></script>

	