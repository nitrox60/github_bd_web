<!-- start template-->
<html>
	<head>
	<title>{$titre}</title>
	
	<style>
		*{
			font-family:helvetica;	
			padding:0px;
			margin:0px;
		}
		
		body{
			background:	-webkit-gradient(linear, left top, left bottom, from(#A5AA95), to(#6F7364));
		}

		#menu{
			background:black;
			height:14pt;	
			padding:5px;
		}
	
		
		#login{
			background:#333;
			float:right;
			padding-right:5px;
			padding-left:5px;
			margin-top:3px;
			color:white;
		}
		#page{
			width:1000px;
			margin:auto;	
			background:white;
		}
	
		#contenu{
			background:white;
			padding:5px;
		}
		#module{
			border:5px #CCF solid;	
		}
		label{
			width:150px;
			float:left;clear:left;	
			margin:4pt;
			text-align:right;
			
		}
		
		#contenu option, #contenu input, #contenu select, #contenu textarea{
			color:#353730;
			font-size:10pt;	
			margin:4pt;
			padding:4pt;
			border:1px #868A78 solid;
			border-radius: 4px;			
		}

		
		#contenu input,#contenu select, #contenu textarea{
			float:left;
		}
		#zonemessage{
			background:#E4FFB4;
			border:5px #99AA78 solid;
			padding:20px;	
		}
		
		span{
			float:left;	
		}
		
		#ifLog
		{
		float:right;
			color:white;
		}
		
		#menu>a
		{


			
			text-align:center;
			border-radius:8px 8px 8px;
			background: linear-gradient(#04BEED, #0383A3);
			background: -webkit-linear-gradient(#04BEED, #0383A3);
			background: -ms-linear-gradient(#04BEED, #0383A3);
			background: -moz-linear-gradient(#04BEED, #0383A3);
			background: -o-linear-gradient(#04BEED, #0383A3);
			border:1px gray solid;
			
			padding:0 5  0 5;
			text-decoration:none;
			line-height:12pt;
			color:white;
			


		}
	
	</style>
	<link rel='stylesheet' href='styles/smoothness/jquery-ui-1.8.5.custom.css' />
	<link rel="icon" type="image/png" href="./images/favicon.ico" />
	</head>
	<body>
	<div id='page'>
		<div id='login'>
			{$bloc_login}
		</div>
	
		<div id='menu'>
			
			
			<a href="?module=login">Login</a>
			<a href="?module=inscription">Inscription</a>
			<a href="?module=admSpace">Administration</a>
			<a href="?module=loc">Location</a>
			<span id="ifLog">
			{if (isset($login))}
				Connecté :{$login}<a href='?module=login&action=deconnect'>Logout</a>{/if}</span>
			
		</div>
		
		
	
		<div id='zonemessage'>
			Message ajouté avec $this->site->ajouter_message("");
			    {$messages}
		</div>
		
		<div id='contenu'>
			Dans cette zone, on affiche le contenu généré par le module <b>{$module}->{$action}()</b>
			<div id='module'>

				{$bloc_contenu}
			</div>
		</div>
	</div>
	</body>
		
</html>
<!-- end template-->