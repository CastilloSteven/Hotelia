$('.datepicker').datepicker({
	autoclose: true,
	todayHighlight: true
});

var availableTags = [
	 "Antonio Nariño",
	 "Barrios Unidos",
	 "Bosa",
	 "Chapinero",
	 "Ciudad Bolívar",
	 "Engativá",
	 "Fontibón",
	 "Kennedy",
	 "La Candelaria",
	 "Los Mártires",
	 "Puente Aranda",
	 "Rafael Uribe Uribe",
	 "San Cristóbal",
	 "Santa Fe",
	 "Suba",
	 "Sumapaz",
	 "Teusaquillo",
	 "Tunjuelito",
	 "Usaquén",
	 "Usme"
];
$( ".autocomplete" ).autocomplete({
	source: availableTags
});

$('.newPass').keyup(function(){
	validPass();
});

$('.email').keyup(function(){
	validEmail();
});

function validEmail(){
	var email = $('#correo').val();
	var confirmEmail = $('#cCorreo').val();
	if(email != confirmEmail){
		$('.alertVerifyEmail').html('<p style=color:red;>Los correos no coinciden</p>');
		$('.alertVerifyEmail').slideDown();
		return false;
	}

	$('.alertVerifyEmail').html('');
		$('.alertVerifyEmail').slideUp();

}

function validPass(){
	var passNuevo = $('#newPass').val();
	var confirmPassNuevo = $('#cnewPass').val();
	if(passNuevo != confirmPassNuevo){
		$('.alertChangePass').html('<p style=color:red;>Las contraseñas no coinciden</p>');
		$('.alertChangePass').slideDown();
		return false;
	}
	if(passNuevo.length < 6){
		$('.alertChangePass').html('<p style=color:red;>La contraseña debe tener mas de 6 caracteres</p>');
		$('.alertChangePass').slideDown();
		return false;
	}

	$('.alertChangePass').html('');
		$('.alertChangePass').slideUp();

}

function search(){
	document.getElementById("hide").style.display="block";
};

function profile(){
	$('#pro').addClass('cur');
	$('#cre').removeClass('cur');
	$('#neq').removeClass('cur');
	$('#his').removeClass('cur');
	$('#pas').removeClass('cur');
	document.getElementById("profile").style.display="block";
	document.getElementById("history").style.display="none";
	document.getElementById("credit").style.display="none";
	document.getElementById("nequi").style.display="none";
	document.getElementById("pass").style.display="none";
	document.getElementById("Pass").style.display="none";
	document.getElementById("Datos").style.display="block";
}

function reservas(){
	$('#his').addClass('cur');
	$('#cre').removeClass('cur');
	$('#pro').removeClass('cur');
	$('#neq').removeClass('cur');
	$('#pas').removeClass('cur');
	document.getElementById("profile").style.display="none";
	document.getElementById("history").style.display="block";
	document.getElementById("credit").style.display="none";
	document.getElementById("nequi").style.display="none";
	document.getElementById("pass").style.display="none";
	
}

function credit(){
	$('#cre').addClass('cur');
	$('#his').removeClass('cur');
	$('#pro').removeClass('cur');
	$('#neq').removeClass('cur');
	$('#pas').removeClass('cur');
	document.getElementById("profile").style.display="none";
	document.getElementById("history").style.display="none";
	document.getElementById("credit").style.display="block";
	document.getElementById("nequi").style.display="none";
	document.getElementById("pass").style.display="none";
}

function nequi(){
	$('#neq').addClass('cur');
	$('#cre').removeClass('cur');
	$('#pro').removeClass('cur');
	$('#his').removeClass('cur');
	$('#pas').removeClass('cur');
	document.getElementById("profile").style.display="none";
	document.getElementById("history").style.display="none";
	document.getElementById("credit").style.display="none";
	document.getElementById("nequi").style.display="block";
	document.getElementById("pass").style.display="none";
}

function pass(){
	$('#pas').addClass('cur');
	$('#cre').removeClass('cur');
	$('#pro').removeClass('cur');
	$('#neq').removeClass('cur');
	$('#his').removeClass('cur');
	document.getElementById("profile").style.display="none";
	document.getElementById("history").style.display="none";
	document.getElementById("credit").style.display="none";
	document.getElementById("nequi").style.display="none";
	document.getElementById("pass").style.display="block";
	document.getElementById("Pass").style.display="block";
	document.getElementById("Datos").style.display="none";
}

/* expand collapse module */
$('aside .tiles-white.titled .head').click(function(){
	$(this).parent().toggleClass('collapsed');	
});


//checkbox style
function checkInput($this_input){
	var name = $this_input.children('input').attr('name');
	if($this_input.children('input').prop('checked')){
		if($this_input.children('input').attr("type") == 'radio'){
			$('input[name='+name+']').parent().removeClass('checked')	
		}
		$this_input.addClass('checked');
	}else{
		$this_input.removeClass('checked')
	}	
}

$('.checkbox, .radio, .bookmark').click(function(){
	checkInput($(this));
});

//tooltip
$('[data-toggle="tooltip"]').tooltip();

//tab-panel
$('.tab-panel > ul li a').click(function(){
	$('.tab-panel > ul li a').removeClass('cur');	
	$(this).addClass('cur');
	var target = $(this).data('href');
	$('.overview > .panel').hide();
	$(target).show();

});

//quick promo
$('.quick-drop').click(function(){
	$('.promo .container').fadeToggle();	
	$(this).toggleClass('cur');
	$('.banner .search').toggle();
});


//mobile menu
$('.mini-header .menu').click(function(){
	$('#header').addClass('cur');	
});

$('.main-header > span').click(function(){
	$('#header').removeClass('cur');	
});

//login popup
$("#login_btn").colorbox({inline:true, href:"#login-block"});
$("#login_btn2").colorbox({inline:true, href:"#login-block2"});

$(document).ready(function () {
	enquire.register("screen and (max-width: 768px)", function() {
		$('.step-content aside .tiles-white .head').parent().addClass('collapsed');
	});
});