
<style>
	.image
	{
		height:57px;
		width:100px;
		cursor:pointer;
	}
	#big
	{
		height:350px;
		width:630px;
		display: block; 
		margin: 0 auto; 
	}
	table.tabcom
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
</style>

<div id="sel"></div>
<div style="clear:both;"></div>
<div id="min" tag="tagok">
	<table class=ok><tr>
	{foreach $photo as $p}
		<td><img id={$p->getIdImage()} class=image src=./images/{$p->getIdImage()}.jpg /></td>
	{/foreach}
	</tr></table></div>
<div id="photo"></div>
<div id="bcom">

<div id="com"><table classe="tabcom">
	<tr><th>IdClient</th><th>DateCom</th><th>Contenu</th><th>Note</th></tr>
	{foreach $com as $c}
		<tr><td>{$c->getIdClient()}</td><td>{$c->getDateCom()}</td><td>{$c->getContenu()}</td><td>{$c->getNote()}</td></tr>
	{/foreach}
	</table></div>
<div id="addcom">{$f_com}</div>

</div>
<div style="clear:both;"></div>
<script src="./js/jquery-1.4.3.min.js"></script>
<script>
	$(function(){
		$('img').live('click', function(){
			var image='';
            $var=$(this).attr('src');
			image='<img id="big" src='+$var+' />'
			$('#photo').html(image).show(1000);
        });
	});
</script>