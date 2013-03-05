//Jquery page loc-index.tpl
$(function(){
	
	var mq="";
	var ml=4;
	var w=4;
		$("#marque>option").each(function(){
			if($(this).val()!=0)
				mq=mq+"<p class=\"mq_but\"style=\"margin-left:"+ml+"%;  width:auto; display:inline-block;\"><a href=\"#\" >"+ $(this).html()+"</a></p>";
		});
		
		$("#test").html(mq);
		
		var marq="";
		$('#test a').click(function(){ //Appelé quand un changement s'éffectue sur la premier liste déroulante
				$(".voiture").each(function(){
				$(this).hide();
				});
				
				$('#load').html('<img class="imgload" src="./images/ajax-loader_loc.gif"/>').show(); //Pendant le chargement
				$("#test a").parent().css("box-shadow"," none");
				$(this).parent().css("box-shadow","1px 1px 1px 1px white ");
				
				marq=$(this)
					$.ajax({
						type: 'GET',
						url: '?module=loc&action=ajax&name='+$(marq).html(),
						
						dataType : 'json',	//Evite de faire $.parseJSON
						success: function(data, txtStatus, jqXHR){
							
							var i=0;
							var txt='';
							
							if(data) 
							{
								for(i=0;i<data.length;i++)
								{
									txt+="<span class='mod_but'><a href=\"#\">"+data[i]+"</a></span>"
								}
								//$('#sel').html("<label for=\"mod\">Modèle</label><select id=\"mod\" name=\"mod\">"+txt+"</select>").show();
								$('#test2').html(txt).show();
								$('#load').html('');
							}
							else
							{	
								$('#test2').html('').hide();
								$('#load').html("Aucune modèle disponible");
								marq.parent().css("background","red");
							}
						}
					});	
				return false;
			});
	
		
		
		$(document).delegate("#test2 a","click",function(){
			$('#load').html('<img class="imgload" src="./images/ajax-loader_loc.gif"/>').show();
			if($('#mod').val()==0) $('#car').html('').hide();
			else
			{	
			
			
			mod=$(this);
				$('#info').html("<div class='b_loc'><a href='?module=car&action=index&name="+$(mod).html()+"'></div>Infos</a>").show
				//Test de connexion a éffectuer ici. via ajax
				$.ajax({
					type: 'GET',
					url: '?module=loc&action=ajaxmod&name='+$(mod).html(),
					dataType: 'json',
					success: function(data,txtStatus, jqXHR){
							
						var i=0;
						var prompt='';
						if(data)
						{
							for(i=0;i<data.length;i++)
							{
								if(data[i]['disp']==true)// a revoir le disp.								
										prompt+="<div class=\"voiture\"><div class='info'> Annee : "+data[i]['annee']+" &nbsp Kilométrage : "+data[i]['km']+" </div><br /><span class='desc'> Description :</span>&nbsp"+data[i]['description']+"<div class='b_loc'><a href='?module=loc&action=rent&id="+data[i]['id']+"' class='rentme'>Louer</a></div></div><br />";
									else if(data[i]['disp']==false) 
										prompt+="<div class=\"voiture\"><div class='info'> Annee : "+data[i]['annee']+" &nbsp Kilométrage : "+data[i]['km']+" </div><br /><span class='desc'> Description :</span>&nbsp"+data[i]['description']+"<div class='b_loc'><a href='?module=loc&action=rent&id="+data[i]['id']+"' class='rentme' >Louer</a></div></div><br />";
							}
									if(prompt=='') prompt="<div class=\"voiture\">Aucune voiture n'est actuellement disponible</div>";
							$('#car').html(prompt).show();
							$('#load').html('');
										
						}
						else $('#car').html('').hide();
					}
				});
			}
		});
		
		
		// sa marche faire un truc qui quand on CLICK sur LOUER apel un ajax qui soit redirige vers loc soit vers connexion comme sa pas besoin de refresh.
		$(document).delegate('input.co_pop[type=submit]','click',function(){
			var MINLENGTH_NDC=4;
			var MINLENGTH_MDP=8;
			if( ( $("#ndc_pop").val().length >= MINLENGTH_NDC) && ( $("#mdp_pop").val().length >= MINLENGTH_MDP))
				$.ajax({	type: 'GET',
					url: '?module=login&action=coajax&log='+$("#ndc_pop").val()+'&mdp='+$("#mdp_pop").val(),
					dataType: 'json',
					success: function(data,txtStatus, jqXHR){
						if(data['bool']==true)
						{
							$("#ifLog").html("Connecté : "+data['who']+"<a href='?module=login&action=deconnect'>Logout</a>");
							$('a.close, #fade').trigger('click');
						}
						else if(data['bool']==false) $("#error_pop").html("Email ou Mot de passe incorrecte!");
					}
					});
			else
				$("#error_pop").html("Email ou Mot de passe incorrecte!");
			
		});
				
				//Lorsque vous cliquez sur un lien de la classe poplight et que le href commence par #
		$(document).delegate('a.poplight[href^=#]','click',function() {
			//var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
			var popID ="popup_name"; //Trouver la pop-up correspondante
			/*var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

			//Récupérer les variables depuis le lien
			var query= popURL.split('?');
			var dim= query[1].split('&amp;');
			var popWidth = dim[0].split('=')[1]; //La première valeur du lien
			*/
			
			var popWidth=800;
			//Faire apparaitre la pop-up et ajouter le bouton de fermeture
			$('#' + popID).fadeIn().css({
				'width': Number(popWidth)
			})
			.prepend('<a href="#" class="close"><img src="./images/close_pop.png" class="btn_close" title="Fermer" alt="Fermer" /></a>');

			//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
			var popMargTop = ($('#' + popID).height() + 80) / 2;
			var popMargLeft = ($('#' + popID).width() + 80) / 2;

			//On affecte le margin
			$('#' + popID).css({
				'margin-top' : -popMargTop,
				'margin-left' : -popMargLeft
			});

			//Effet fade-in du fond opaque
			$('body').append('<div id="fade"></div>'); //Ajout du fond opaque noir
			//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
			$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

			return false;
		});

		//Fermeture de la pop-up et du fond
		$('a.close, #fade').live('click', function() { //Au clic sur le bouton ou sur le calque...
			$('#fade , .popup_block').fadeOut(function() {
				$('#fade, a.close').remove();  //...ils disparaissent ensemble
			});
			return false;
		});
		//se declenche quand on click sur LOUER
		$(document).delegate('a.rentme','click',function(){
			var res=false;
				//on test de facon synchrone si user est co.
				$.ajax({type: 'GET',
						async: false,
						url: '?module=loc&action=isOK',
						dataType: 'json',						
						success: function(data){
							res=data;
						}
						
				
				});
			
			if(res==false) 
				 $('a.poplight[href^=#]').trigger('click');
			return res;
		
		});
		
		
});
