<a href="?module=admMarque&action=add"><img src="./images/boutton.jpg"/></a>

<table>
<tr><th>Id</th><th>Marque</th><th>Modifier</th><th>Supprimer</th></tr>
	{foreach $liste as $c}
		<tr><td>{$c->getIdMarque()}</td><td><a href="?module=admModele&action=index&id={$c->getIdMarque()}">{$c->getNomMarque()}</a></td><td><a href="?module=admMarque&action=add&id={$c->getIdMarque()}"><img src="./images/update.png" alt="buttonUpdate"/></a></td><td><a href="?module=admMarque&action=delete&id={$c->getIdMarque()}" class="suppr" onclick="return confirm('Etes-vous sur de vouloir supprimer cette marque?')"><img src="./images/delete.png" alt="buttonUpdate"/></a></td></tr>
	{/foreach}
<table>


