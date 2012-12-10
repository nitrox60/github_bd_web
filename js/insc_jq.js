$(function(){

	var nom=false;
	$("#nom").blur(function(){
	
		if($(this).val().length>=20) 
		{
			if(!nom)
			{
				$(this).after("<span class=\"error\"> Le nom doit être inférieur à 20 caractères</span>");
				nom=true;
			}
	
		}
		else if  ($(this).val().length==0)
		{
			if(!nom)
			{
				$(this).after("<span class=\"error\"> Le Champs nom n'est pas rempli</span>");
				nom=true;
			}
		
		}
		else
		{
			$("#nom+ .error").hide();
			nom=false;
		}
	});
	
	
	var prenom=false;
	
	$("#prenom").blur(function(){
	
		if($(this).val().length>=20)
		{
			if(!prenom)
			{
				$(this).after("<span class=\"error\"> Le nom doit être inférieur à 20 caractères</span>");
				prenom=true;
			}
			
		}
		else
		{
			$("#prenom + .error").hide();
			prenom=false;
		}
	
	});
	
	var rue=false;
	$("#rue").blur(function(){
	
		if($(this).val().length>=50)
		{
			if(!rue)
			{
			
				$(this).after("<span class=\"error\"> La rue doit être inférieur à 50 caractères</span>");
				rue=true;
			}
		}
		else 
		{
			$("#rue + .error").hide();
			rue=true;
		}
	});
	
	var cp=false;
	$("#cp").blur(function(){
	
		
		
		if ( (!(/^[0-9]{5}$/.test($(this).val()))) || (/^(0){2}[0-9]{3}$/.test($(this).val()=="00000")))
		{
			if(!cp)
			{
				$(this).after("<span class=\"error\"> Code postal incorrect format XXXXX</span>");
					cp=true;
			}
		}
		else 
		{	
			$("#cp + .error").hide();
			cp=false;
		}
		
	});
	
	

});