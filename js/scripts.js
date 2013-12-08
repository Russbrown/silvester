
// Masonry script
$(window).load ( function(){
	 $(function(){
	  $('#content').masonry({
	    // options
	    itemSelector : '.post',
	    columnWidth : 310,
	    gutterWidth: 12

	  });
	});	


});

$(document).ready(function() {
	$('.navigation-main li:first-child').hover( function() {
		$('.header-img').attr('class', 'header-img');
		$('.header-img').addClass('greenhead');
		$('#menu-nav').attr('class', 'menu');		
		$('#menu-nav').addClass('greenmenu');
	});

	$('.navigation-main li:nth-child(2)').hover( function() {
		$('.header-img').attr('class', 'header-img');
		$('.header-img').addClass('redhead');

		$('#menu-nav').attr('class', 'menu');	
		$('#menu-nav').addClass('redmenu');
	});

	$('.navigation-main li:nth-child(3)').hover( function() {
		$('.header-img').attr('class', 'header-img');
		$('.header-img').addClass('bluehead');

		$('#menu-nav').attr('class', 'menu');	
		$('#menu-nav').addClass('bluemenu');
	});

	$('.navigation-main li:nth-child(4)').hover( function() {
		$('.header-img').attr('class', 'header-img');
		$('.header-img').addClass('purplehead');

		$('#menu-nav').attr('class', 'menu');	
		$('#menu-nav').addClass('purplemenu');
	});

});
