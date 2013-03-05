<!-- start template-->
<html>
	<head>
	<title>{$titre}</title>
	
	
	<link rel='stylesheet' href='styles/smoothness/jquery-ui-1.8.5.custom.css' />
	<link rel='stylesheet' href='styles/main.css' />
	<link rel="icon" type="image/png" href="./images/favicon.ico" />
	</head>
	<body>
	<div id='page'>
		
	
		<div id='menu'>
			
			<a href="?module=loc&action=mail">Mail</a>
			<a href="?module=login">Login</a>
			<a href="?module=inscription">Inscription</a>
			<a href="?module=admSpace">Administration</a>
			<a href="?module=loc">Location</a>
			<a href="?module=car">Nos voitures</a>
			<span id="ifLog">
			{if (isset($login))}
				Connecté :{$login}<a href='?module=login&action=deconnect'>Logout</a>
				{else}<a href="#?w=500" rel="popup_name" class="poplight" >Connexion</a> 
				{/if}</span>
			
		</div>
		
		
	
		<div id='zonemessage'>
			<!-- Message ajouté avec $this->site->ajouter_message(""); -->
			    {$messages}
		</div>
		
		<div id='contenu'>
			<!-- Dans cette zone, on affiche le contenu généré par le module <b>{$module}->{$action}()</b>-->
			<div id='module'>

				{$bloc_contenu}
			</div>
		</div>
		
		<!-- informations footer -->
	<div id="footer">
	<div id="infofoot"><a href="#"> Remerciement</a> <a href="#">Contact</a> <a href="#">Nos adresses</a> <a href="#">Mentions légales</a></div>
	<div id="madeby">Made By TAYAA-DALMAS Corporation. All Right Reserved</div>
	</div>
	</div>
	</body>
	
		
</html>
<!-- end template-->