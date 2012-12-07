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
			$(this).after("<span class=\"error\"> Le nom doit être inférieur à 20 caractères</span>");
			alert('test gh');
		}
	
	});

});