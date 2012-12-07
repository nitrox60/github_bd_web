<?php /* Smarty version Smarty-3.1.1, created on 2012-12-04 14:31:58
         compiled from "modules\loc\tpl\loc-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1980750be05c86a3d23-34874033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154bf291037a37a9eda496c1e85fc48420e0a9a6' => 
    array (
      0 => 'modules\\loc\\tpl\\loc-index.tpl',
      1 => 1354631515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1980750be05c86a3d23-34874033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50be05c882ef1',
  'variables' => 
  array (
    'f_loc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50be05c882ef1')) {function content_50be05c882ef1($_smarty_tpl) {?>﻿<style>
.voiture
{
	width: 60%;
	border: 2 px solid black;
	

	margin-bottom: 30px;
	margin-left: 10%;
	
}

select{
	outline:none;
}

#sel
{
	width: 70%;
	
}

#car
{
	width: 70%;
	clear:both;
}

.b_loc
{
	
	
}

.b_loc a{

 text-decoration :none;
 display:block;
 line-height:40px;
 width:100px;
 
 border-radius: 10px 10px 7px;
	font-size:30px;
	  background: -webkit-linear-gradient(#028DFF, #01437C);
   background:    -moz-linear-gradient(#028DFF, #01437C);
   background:     -ms-linear-gradient(#028DFF, #01437C);
   background:      -o-linear-gradient(#028DFF, #01437C);
   background: linear-gradient(#028DFF, #16BC03);
text-align:center;

	margin-bottom:5px;
	margin-top:4%;

	margin-left: 31%;
	color: black;

	
 


}




</style>

<?php echo $_smarty_tpl->tpl_vars['f_loc']->value;?>

<div id="sel"></div>
<div id="car"></div>
<span></span>
<div style="clear:both;"></div>

<script src="./js/jquery-1.4.3.min.js"></script>
<script>
	$(function(){
		$('#marque').change(function(){
			
				$('#sel').html('<img src="./images/ajax-loader_loc.gif"/>').show();
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
</script><?php }} ?>