﻿//Jquery page loc-index.tpl
$(function(){
	
		$('#marque').change(function(){ //Appelé quand un changement s'éffectue sur la premier liste déroulante
			
				$('#sel').html('<img src="./images/ajax-loader_loc.gif"/>').show(); //Pendant le chargement
				if($('#marque').val()==0)$('#sel').html('').hide();
				else
				{
					$.ajax({
						type: 'GET',
						url: '?module=loc&action=ajax&name='+$("select[name=marque] >option:selected").html(),
						
						dataType : 'json',	//Evite de faire $.parseJSON
						success: function(data, txtStatus, jqXHR){
							
							var i=0;
							var txt='<option></option>';
							
							if(data) 
							{
								for(i=0;i<data.length;i++)
								{
										//$("#sel").html("<option>"+$("select[name=marque] >option:selected").html()+"</option>").show();
										txt+="<option>"+data[i]+"</option>"
								}
								$('#sel').html("<label for=\"mod\">Modèle</label><select id=\"mod\" name=\"mod\">"+txt+"</select>").show();
								
							}
							else $('#sel').html('').hide();
						}
					});	
				}
			});		
			
		$('#sel').change(function(){
				$('#car').html('<img src="./images/ajax-loader_loc.gif"/>').show();
				if($('#mod').val()==0) $('#car').html('').hide() ;
				else
				{
					$.ajax({
						type: 'GET',
						url: '?module=loc&action=ajaxmod&name='+$("select[name=mod] >option:selected").html(),
						dataType: 'json',
						success: function(data,txtStatus, jqXHR){
						
							var i=0;
							var prompt='';
							if(data)
							{
							
								for(i=0;i<data.length;i++)
								{
									if(data[i]['disp'])	prompt+="<div class=\"voiture\"> Annee : "+data[i]['annee']+" -- Kilométrage : "+data[i]['km']+" <br /> Description : <br />"+data[i]['description']+"<div class='b_loc'><a href='?module=loc&action=rent&id="+data[i]['id']+"'>Louer</a></div></div><br />";
								
								}
								if(prompt=='') prompt="Aucune voiture n'est actuellement disponible";
								$('#car').html(prompt).show();
								
							}
							else $('#car').html('').hide();
						}
					});
				}	
		});
	});
