
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
</style>
{$f_car}
<div id="sel"></div>
<div style="clear:both;"></div><br/>
<div id="min" tag="tagok"></div><br/>
<div id="photo"></div>
<script src="./js/jquery-1.4.3.min.js"></script>
<script>
	$(function(){
		$('#marque').change(function(){
			if($('#marque').val()==0)$('#sel').html('').hide();
				else
				{
					$.ajax({
						type: 'GET',
						url: '?module=car&action=ajax&name='+$("select[name=marque] >option:selected").html(),
						
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
			$('#min').html('').hide();
			$.getJSON("?module=car&action=ajaxph&name="+$("select[name=mod] >option:selected").html(),"",function(data){ 
				var i=0;
				var prompt='';
				if(data)
				{	
					prompt='<table class=ok><tr>'
					for(i=0;i<data.length;i++)
					{
						prompt+='<td><img id='+data[i]+' class=image src=./images/'+data[i]+'.jpg /></td>';
						if(i%3==7)
							prompt+='</tr><tr>';
					}
					prompt+='</tr></table>';
					$('#min').html(prompt).show(1000);	
				}
				else $('#min').html('').hide();
			})					
		});
		
		$('img').live('click', function(){
			var image='';
            $var=$(this).attr('src');
			image='<img id="big" src='+$var+' />'
			$('#photo').html(image).show(1000);
        });
	});
</script>