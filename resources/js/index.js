$( document ).ready( function() {
	function setCookie( name, value, days ) {
		let expires = "";
		if ( days ) {
			let date = new Date();
			date.setTime( date.getTime() + (days * 24 * 60 * 60 * 1000) );
			expires = "; expires=" + date.toUTCString();
		}
		document.cookie = name + "=" + (value || "") + expires + "; path=/";
	}

	$( '.bosses-chose-server' ).click( function() {
		let server = $( this ).attr( 'data-server' );
		setCookie( 'bossesChosenServer', server, 120 );
	} )
} );
