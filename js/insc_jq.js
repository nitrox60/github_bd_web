$(function(){

	$("#nom").blur(function(){
	
		if($(this).val().length>=20)
		{
			$("#nom").after("<span class=\"error\"> Le nom doit être inférieur à 20 caractères</span>");
	
		}
	
	});
	
	$("#prenom").blur(function(){
	
		if($(this).val().length>=20)
		{
			$("#prenom").after("<span class=\"error\"> Le nom doit être inférieur à 20 caractères</span>");
			
		}
	
	});
	
	$("#rue").blur(function(){
	
		if($(this).val().length>=50)
		{
			$(this).after("<span class=\"error\"> La rue doit être inférieur à 50 caractères</span>");
			
		}
	
	});
	
	$("#cp").blur(function(){
	
		
		
		if(!(/^[0-9]{5}$/.test($(this).val()))) 
			$(this).after("<span class=\"error\"> Code postal incorrect format XXXXX</span>");
		
	});

});