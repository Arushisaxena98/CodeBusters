var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

$(document).ready(function()
{	$('#content-wrap').fadeIn(2000);
	$('#Login').click(function(){
		$('#id02').slideToggle();
	});
	$('#inputtext').keyup(function() {
		var sub=$('#inputtext').val();
		console.log(sub);
		if(sub != '')
		{
		$.post('getlist.php',
		{
			sub : sub,
		}, function(data)
		{ 	console.log(data);
			if(data == 'category')
			{
				$.post('showlist.php',
				{
					sub : sub,
					sendcat : 'true'
				},function(data){
					console.log(data);
					$('#paraid').html(data);
					$('#parasubid').html('');
				});
				$('#cat').slideDown('fast');
			}
			else if(data == 'subcategory')
			{
				$.post('showlist.php',
				{
					sub : sub,
					sendcat : 'false'
				},function(data){
					console.log(data);
					$('#parasubid').html(data);
					$('#paraid').html('');
				});
				$('#subcat').slideDown('fast');
			}
			else{
					$('#paraid').html('');
					$('#parasubid').html('');
				}
		});
		}
		else{
			$('#paraid').html('');
			$('#parasubid').html('');
			
		}
		});
	
	 $('#paraid').click(function(){
		var catvalue=$('#paraid').text();
		console.log(catvalue);
	});
});