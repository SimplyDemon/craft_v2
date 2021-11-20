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
        let rows     = $( this ).find( 'tbody tr:not(".disabled-with-js, .tr-total")' );
        let totalNew = 0;
        rows.each( function() {
            totalNew += parseInt( $( this ).find( "[data-total]" ).first().attr( 'data-total' ) );
        } );

        let quantity = $( 'span[data-recipe-quantity]' );
        if ( quantity.length > 0 ) {
            totalNew = Math.ceil( totalNew / parseInt( quantity.attr( 'data-recipe-quantity' ) ) );
        }

        $( this ).find( '.total' ).html( totalNew.toLocaleString() );
    } );
}

$( ".disable-row" ).on( 'click', function() {
    let tr = $( this ).closest( 'tr' ).toggleClass( 'disabled-with-js' );
    updatePrices();
} ).change();

function updateRowTotal( row ) {
    let dataQuantity = row.find( "[data-quantity]" );
    let dataHas      = row.find( "[data-has]" );
    let dataPrice    = row.find( "[data-price]" );
    let dataTotal    = row.find( "[data-total]" );

    let total = (parseInt( dataQuantity.attr( "data-quantity" ) ) - parseInt( dataHas.attr( "data-has" ) )) * parseInt( dataPrice.attr( "data-price" ) );
    if ( total < 0 ) {
        total = 0;
    }

    dataTotal.attr( "data-total", total );
    dataTotal.html( total.toLocaleString() );

}

function updateHas( input ) {
    let has = parseInt( input.val() );
    if ( isNaN( has ) || has < 0 ) {
        has = 0;
    }

    input.closest( "[data-has]" ).attr( "data-has", has );
}

function updateColumn( input, dataAttribute ) {
    let value = parseInt( input.val() );
    if ( isNaN( value ) || value < 0 ) {
        value = 0;
    }

    input.closest( "[" + dataAttribute + "]" ).attr( dataAttribute, value );
}

$( "td.td-has[data-has] input" ).on( 'change', function() {
    let input = $( this );
    updateColumn( input, 'data-has' );
    let row = input.closest( 'tr' );

    updateRowTotal( row );
    updatePrices();
} );

$( "td.td-price[data-price] input" ).on( 'change', function() {
    let input = $( this );
    updateColumn( input, 'data-price' );
    let row = input.closest( 'tr' );

    updateRowTotal( row );
    updatePrices();
} );
