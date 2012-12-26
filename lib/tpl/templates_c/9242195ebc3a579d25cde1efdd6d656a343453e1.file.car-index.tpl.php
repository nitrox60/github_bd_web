<?php /* Smarty version Smarty-3.1.1, created on 2012-12-25 22:29:00
         compiled from "modules\car\tpl\car-index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2229050da28ac10f3e6-23700551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9242195ebc3a579d25cde1efdd6d656a343453e1' => 
    array (
      0 => 'modules\\car\\tpl\\car-index.tpl',
      1 => 1356474494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2229050da28ac10f3e6-23700551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'f_car' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_50da28ac20486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50da28ac20486')) {function content_50da28ac20486($_smarty_tpl) {?>
<style>
td
{
	height:10px;
}
</style>
<?php echo $_smarty_tpl->tpl_vars['f_car']->value;?>

<div id="sel"></div>
<div style="clear:both;"></div><br/>
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
			$('#photo').html('').hide();
				$.getJSON("?module=car&action=ajaxph&name="+$("select[name=mod] >option:selected").html(),"",function(data){ 
							var i=0;
							var prompt='';
							if(data)
							{
								prompt='<table><tr>'
								for(i=0;i<data.length;i++)
								{
									prompt+='<td><img src=./images/'+data[i]+'.png /></td>';
									if(i%3==2)
										prompt+='</tr><tr>';
								}
								prompt+='</tr></table>';
								$('#photo').html(prompt).show(1000);	
							}
							else $('#photo').html('').hide();
					})
					
		});
	});
</script><?php }} ?>