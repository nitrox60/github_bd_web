
{$f_car}
<div id="sel"></div>
<div style="clear:both;"></div>
<script src="./js/jquery-1.4.3.min.js"></script>
<script>
	$(function(){
		$('#marque').change(function(){
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
									$('#sel').html("<select id=\"mod\" name=\"mod\">"+txt+"</select>").show();
									
								}
								else $('#sel').html('').hide();
						}
					});	
				}
		});
			
		$('#sel').change(function(){
			if($('#mod').val()==0) $('#car').html('').hide() ;
			else{
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
									prompt+="<div class=\"voiture\"> Annee : "+data[i]['annee']+" -- Kilométrage : "+data[i]['km']+" <br /> Description : <br />"+data[i]['description']+"<div class='b_loc'><a href='?module=loc&action=rent&id="+data[i]['idMod']+"'>Louer</a></div></div><br />";
								
								}
								$('#car').html(prompt).show();
								
							}
							else $('#car').html('').hide();
					}
				});
			}		
		});
	});
</script>