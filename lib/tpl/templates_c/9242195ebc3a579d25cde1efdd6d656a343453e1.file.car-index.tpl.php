<?php /* Smarty version Smarty-3.1.1, created on 2013-01-09 18:16:32
         compiled from "modules\car\tpl\car-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2229050da28ac10f3e6-23700551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9242195ebc3a579d25cde1efdd6d656a343453e1' => 
    array (
      0 => 'modules\\car\\tpl\\car-index.tpl',
      1 => 1357755385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2229050da28ac10f3e6-23700551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50da28ac20486',
  'variables' => 
  array (
    'f_car' => 0,
    'f_com' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50da28ac20486')) {function content_50da28ac20486($_smarty_tpl) {?>
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
	
	#addcom
	{
		display:none;
	}
</style>
<?php echo $_smarty_tpl->tpl_vars['f_car']->value;?>

<div id="sel"></div>
<div style="clear:both;"></div>
<div id="min" tag="tagok"></div>
<div id="photo"></div>
<div id="bcom">
<div id="addcom"><?php echo $_smarty_tpl->tpl_vars['f_com']->value;?>
</div>
<div class="com"></div>
</div>
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
					$('#addcom').show("slow");
					$('#addcom textarea').attr("placeholder","Commentaire").show();
				}
				else{
					$('#min').html('').hide();
					$('#addcom').hide();	
				}
			})					
		});
		
		$('img').live('click', function(){
			var image='';
            $var=$(this).attr('src');
			image='<img id="big" src='+$var+' />'
			$('#photo').html(image).show(1000);
        });
	});
</script><?php }} ?>