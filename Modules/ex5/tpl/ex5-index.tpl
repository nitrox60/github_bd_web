<p>
Peu importe ce que vous tapez, le script serveur renvoie [un,deux,trois]...
</p>
<p>
Formulaire:  
</p>
<script src='js/jquery-1.4.3.min.js'></script>
<script src='js/jquery-ui-1.8.5.custom.min.js'></script>
<script>
{literal}
$(function(){
	$('#ajax').autocomplete({source: "?module=ex5&action=ajax"})}
)
{/literal}
</script>
<input type='text' id='ajax' />
<div style='clear:both'></div>