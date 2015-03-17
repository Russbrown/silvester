
$(document).ready(function() {
	$('.navigation-main li:first-child').hover( function() {
		$('.header-img').attr('class', 'header-img');
		$('.header-img').addClass('greenhead');
	});

	$('.navigation-main li:nth-child(2)').hover( function() {
		$('.header-img').attr('class', 'header-img');
		$('.header-img').addClass('redhead');
	});

	$('.navigation-main li:nth-child(3)').hover( function() {
		$('.header-img').attr('class', 'header-img');
		$('.header-img').addClass('bluehead');
	});

	$('.navigation-main li:nth-child(4)').hover( function() {
		$('.header-img').attr('class', 'header-img');
		$('.header-img').addClass('purplehead');
	});

	$('#mc_mv_EMAIL').attr('placeholder', 'Email');

});
