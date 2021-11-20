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
        let output   = '';
        let totalNew = 0;
        rows.each( function() {
            totalNew += parseInt( $( this ).find( "[data-total]" ).first().attr( 'data-total' ) );
        } );
        output += totalNew.toLocaleString();

        let quantity = $( 'span[data-recipe-quantity]' );
        if ( quantity.length > 0 ) {
            totalPerOne = Math.ceil( totalNew / parseInt( quantity.attr( 'data-recipe-quantity' ) ) );
            output += ' | ' + totalPerOne.toLocaleString();
        }

        $( this ).find( '.total' ).html( output );
    } );
}

$( ".disable-row" ).on( 'click', function() {
    $( this ).closest( 'tr' ).toggleClass( 'disabled-with-js' );
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
    } else if ( !total ) {
        total = 0;
    }

    dataTotal.attr( "data-total", total );
    dataTotal.html( total.toLocaleString() );
}

function updateColumn( input, dataAttribute, value ) {
    input.closest( '[' + dataAttribute + ']' ).attr( dataAttribute, value );
    input.val( value );
}

$( "td.td-has[data-has] input" ).on( 'change', function() {
    let input    = $( this );
    let quantity = parseInt( input.closest( 'tr' ).find( '[data-quantity]' ).attr( 'data-quantity' ) );
    let value    = parseInt( input.val() );
    if ( value > quantity ) {
        value = quantity;
    } else if ( value < 0 ) {
        value = 0;
    } else if ( !value ) {
        value = 0;
    }

    updateColumn( input, 'data-has', value );
    let row = input.closest( 'tr' );

    updateRowTotal( row );
    updatePrices();
} );

$( "td.td-price[data-price] input" ).on( 'change', function() {
    let input = $( this );
    let value = parseInt( input.val() );
    if ( value < 0 ) {
        value = 0;
    } else if ( !value ) {
        value = 0;
    }

    updateColumn( input, 'data-price', value );
    let row = input.closest( 'tr' );

    updateRowTotal( row );
    updatePrices();
} );

$( "tr.tr-total td[data-craft-count] input" ).on( 'change', function() {
    let input = $( this );
    let value = parseInt( input.val() );
    if ( value < 1 ) {
        value = 1;
    } else if ( value > 100 ) {
        value = 100;
    } else if ( !value ) {
        value = 1;
    }

    let recipeQuantity = $( '[data-recipe-quantity-base]' );
    if ( recipeQuantity.length > 0 ) {
        let recipeQuantityBase  = parseInt( recipeQuantity.attr( 'data-recipe-quantity-base' ) );
        let recipeQuantityTotal = recipeQuantityBase * value;
        recipeQuantity.attr( 'data-recipe-quantity', recipeQuantityTotal );
        recipeQuantity.html( recipeQuantityTotal.toLocaleString() );
    }

    updateColumn( input, 'data-craft-count', value );
    let table      = input.closest( 'table' );
    let quantities = table.find( 'td[data-quantity]' );
    quantities.each( function() {
        let quantityBase = $( this ).attr( 'data-quantity-base' );
        let maxQuantity  = parseInt( quantityBase ) * value;
        $( this ).attr( 'data-quantity', maxQuantity );
        $( this ).html( (parseInt( quantityBase ) * value).toLocaleString() );
        $( this ).closest( 'tr' ).find( '[data-has] input' ).prop( 'max', maxQuantity );
        updateRowTotal( $( this ).closest( 'tr' ) );
    } );

    updatePrices();
} );


