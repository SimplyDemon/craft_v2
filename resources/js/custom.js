// Hide search results on click other area
$( document ).click( function( e ) {
    if ( $( e.target ).closest( "#search_result-ul" ).length > 0 || $( e.target ).closest( "#search" ).length > 0 ) {

    } else {
        $( '#search_result-ul' ).html( '' );
    }

} );

// Init csrf for ajax form
$.ajaxSetup( {
    headers: {
        'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
    }
} );


let timeout;
// Ajax live search
$( '.search-input' ).bind( 'keyup click', function() {
    if ( timeout ) {
        clearTimeout( timeout );
    }
    let $value = $( this ).val();
    if ( $value.length > 1 ) {
        timeout = setTimeout( function() {
            $.ajax( {
                type: 'post',
                url: '/search',
                data: { 's': $value },
                success: function( data ) {
                    let code = '';
                    if ( data !== null && data !== undefined && data.length > 0 ) {
                        $.each( data, function( index, value ) {
                            code += '<li><img style="margin-right: 5px" width="20px" src="' + value[ 'jsImg' ] + '" alt="' + value[ 'name' ] + '"><a href="' + value[ 'jsUrl' ] + '">' + value[ 'name' ] + '</a></li>';
                        } );
                    } else {
                        code += '<li>Ничего не найдено.</li>';
                    }

                    $( '#search_result-ul' ).html( code );
                }
            } );
        }, 400 );
    } else {
        $( '#search_result-ul' ).html( '' );
    }
} )

function updatePrices() {
    let tables = $( 'table' );
    tables.each( function() {
        let totals   = $( this ).find( 'tbody tr:not(".disabled-with-js") [data-total]' );
        let totalNew = 0;
        totals.each( function() {
            totalNew += parseInt( $( this ).attr( 'data-total' ) );
        } );

        $( this ).find( '.total' ).html( totalNew.toLocaleString() );
    } );
}

$( ".disable-row" ).on( 'click', function() {
    let tr = $( this ).closest( 'tr' ).toggleClass( 'disabled-with-js' );
    updatePrices();
} ).change();
