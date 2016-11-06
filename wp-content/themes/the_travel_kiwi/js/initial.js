var id = "";

jQuery( document ).ready(function(){
	jQuery( "#menu-controller" ).on("click", function() { openCloseMobileMenu( "#mobile-menu-holder" ) });

	jQuery(".owl-carousel").owlCarousel({		
		margin: 10,
		loop: true,
		items: 1,
		stagePadding: 120,
		nav: true,
		center: true,
		navText: [prevIcon, nextIcon]
	});
});

function openCloseMobileMenu( menuSelector ) {
	holder_ = jQuery( menuSelector );

	if ( holder_.hasClass( "slideInDown" ) ) { holder_.removeClass( "slideInDown" ).addClass( "slideOutUp" ); }
	else { holder_.removeClass( "slideOutUp" ).addClass( "slideInDown" ); }
}

function playPauseVideo( videoID, controllerID ) {
	//controller = document.getElementById( controllerID );
	video = document.getElementById( videoID );
	if ( video.paused ) { 
		video.play();
	}
    else { video.pause(); }
}