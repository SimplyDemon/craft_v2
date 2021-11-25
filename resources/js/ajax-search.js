import { resetFilter } from './recipes';

$( document ).ready( function() {
    let timeout;
    // Ajax live search
    $( '#item-search' ).bind( 'keyup click', function() {
        if ( timeout ) {
            clearTimeout( timeout );
        }
        let value = $( this ).val().toLowerCase();
        let items = $( '.col-items .item' );
        timeout   = setTimeout( function() {
            let find = items.filter( function() {
                return $( this ).attr( 'data-name' ).indexOf( value ) > - 1;
            } );
            items.hide();
            resetFilter();
            find.show();
        }, 200 );
    } );
} );
