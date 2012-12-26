<br />


Inscription :
{$f_ins}


<div style="clear:both;"></div>
<script src="./js/jquery-1.4.3.min.js"></script>
<script src="./js/insc_jq.js"></script>
<script>
	$(function(){
		$('#mail').blur(function(){
			$.ajax({
				type: 'GET',
				url: '?module=inscription&action=ajax&login='+$('#mail').val(),
				
				dataType : 'json',	//Evite de faire $.parseJSON
				success: function(data, txtStatus, jqXHR){
					if(data)
						$('#mail').after("<span class=\"error\">"+data+"</span>");
					else $("#mail+ .error").remove();
				}
			})
		})
	})
</script>