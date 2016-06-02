jQuery(document).ready(function($) {
	$(document).foundation();

	$( '.nav-toggle' ).click(function() {
	  $(this).toggleClass( 'open' );
	  $( 'nav' ).fadeToggle(100);

	  return false;
	});

	$( '.show-badges' ).on( 'click', function(event) {
		var link = $( '.show-badges' );

		$( '.wptreehouse-badge' ).toggle( 'fast', function() {
      if ($( '.wptreehouse-badge' ).is( ':visible' ))  {
           link.text( 'Hide Badges' );                
      } else {
           link.text( 'Show Badges' );                
      }        
    }); 

	});
	
});
