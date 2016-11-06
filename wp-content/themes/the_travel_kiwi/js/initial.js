jQuery( document ).ready(function(){
	jQuery( "#menu-controller" ).on("click", function() { openCloseMobileMenu( "#mobile-menu-holder" ) });
});

function openCloseMobileMenu( menuSelector ) {
	holder_ = jQuery( menuSelector );

	if ( holder_.hasClass( "slideInDown" ) ) { holder_.removeClass( "slideInDown" ).addClass( "slideOutUp" ); }
	else { holder_.removeClass( "slideOutUp" ).addClass( "slideInDown" ); }
}