$ = jQuery.noConflict();
$(document).ready(function() {

	$('.bxslider').bxSlider({
		auto : true,
		controls : false,
		pager : true,
		captions : true,
		mode : 'fade'
	});

});

function validate() {
	var name = $('#name').val();
	var email = $('#email').val();
	var mob = $('#mob-num').val();
	var msg = $('#message').val();
	var error = 0;

	var reg = /[a-zA-Z][\'\-\s]*/;
	if (!reg.test(name)) {
		$('#name-error').show();
		$('#name').addClass('red-border');
		error = 1;
	} else {
		$('#name-error').hide();
		$('#name').removeClass('red-border');
	}

	if (email != '') {
		reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		if (!reg.test(email)) {
			$('#email-error').show();
			$('#email').addClass('red-border');
			error = 1;
		} else {
			$('#email-error').hide();
			$('#email').removeClass('red-border');
		}
	}

	reg = /[0-9]{10}/;
	if (!reg.test(mob)) {
		$('#mob-error').show();
		$('#mob-num').addClass('red-border');
		error = 1;
	} else {
		$('#mob-error').hide();
		$('#mob-num').removeClass('red-border');
	}

	if (msg == '') {
		$('#msg-error').show();
		$('#message').addClass('red-border');
		error = 1;
	} else {
		reg = /[a-zA-Z0-9\s\'\-\s\/\\\,\.\"\#\@\(\)\&\*\_]*/;
		if (!reg.test(msg)) {
			$('#msg-error').show();
			$('#message').addClass('red-border');
			error = 1;
		} else {
			$('#msg-error').hide();
			$('#message').removeClass('red-border');
		}
	}
	
	if(error == 1) {
		return false;
	} else {
		return true;
	}
}
