(function($){
  $(function(){
	  
	$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
    	$('#nav').addClass('shrink');
    }
    else {
    $('#nav').removeClass('shrink');
    }
  });
});

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
	$('ul.tabs').tabs();
  
	
	$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      hover: true, // Activate on hover
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
	
	$(document).ready(function(){
		$('.slider').slider();
    });
	// Pause slider
	$('.slider').slider('pause');
	// Start slider
	$('.slider').slider('start');
	// Next slide
	$('.slider').slider('next');
	// Previous slide
	$('.slider').slider('prev');

  }); // end of document ready
		
})(jQuery); // end of jQuery name space