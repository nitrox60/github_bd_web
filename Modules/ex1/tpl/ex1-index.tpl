Ce module crée un tableau, le passe au template qui gère sa mise en page

<table>
<thead>
<th>Col1</th><th>Col2</th><th>Col3</th>
</thead>
<tbody>
{foreach $table as $ligne=>$donnees}
	<tr><td>{$donnees.N}</td><td> {$donnees.M}</td><td>{$donnees.O}</td></tr>
{foreachelse}	
pas de données
{/foreach}
</tbody>
</table>