$(document).ready(function(){
	$('#searchHot').focus();
	$('#searchHot').on('keyup', function(){
		var search = $('#searchHot').val();
        $.ajax({
            type: 'POST',
            url: 'model/hotel.php',
            data:{'search': search}
        })
        .done(function(resultado){
            $('#hide').html(resultado);
        })
        .fail(function(){
            alert('Hubo un error');
        })
	})
})
