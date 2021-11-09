// Hide search results on click other area
$( document ).click( function( e ) {
    if ( $( e.target ).closest( "#search_result-ul" ).length > 0 || $( e.target ).closest( "#search" ).length > 0 ) {
        return false;
    }
    $( '#search_result-ul' ).html( '' );
} );

// Init csrf for ajax form
$.ajaxSetup( {
    headers: {
        'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
    }
} );
