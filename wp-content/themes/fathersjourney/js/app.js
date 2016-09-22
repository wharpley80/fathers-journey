jQuery(document).ready(function($) {
	$(document).foundation();

	$('.nav-toggle').click(function() {
	  $(this).toggleClass('open');
	  $('nav').fadeToggle(100);

	  return false;
	});

	$('.show-badges').on('click', function(event) {
		var link = $('.show-badges');

		$('.wptreehouse-badge').toggle('fast', function() {
      if ($('.wptreehouse-badge').is(':visible'))  {
           link.text('Hide Badges');                
      } else {
           link.text('Show Badges');                
      }        
    }); 

	});

	$('.view-img').on('click', function() {
		event.preventDefault();

		var id = $(this).parent('a').find('span').data('id');

    $('#imagepreview').attr('src', $('#imageresource' + id).attr('src')); // here asign the image to the modal when the user click the enlarge link
    $('#imagemodal').foundation('open'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
	});

	// Slides the gradient up and down when the nav menu is opened and closed in smaller screen sizes.
  $('.menu-icon').toggle(
	  function() {
	    $('.overlay').animate({ marginTop: "220px" }, 0)
	  },
	  function() {
	    $('.overlay').animate({ marginTop: "40px" }, 0);
	  }
	);

});
