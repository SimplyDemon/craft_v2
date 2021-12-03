let isConfirmAdded = false;
function updatePrices() {
    let tables = $( 'table' );
    if ( !isConfirmAdded ) {
        addConfirm();
        isConfirmAdded = true;
    }

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

function updateRecipesTotal() {
    let dataCraftCount = $( "td[data-craft-count]" );
    let priceContainer = $( 'p#recipe-price-craft-with-count' );
    let value          = $( 'div[data-recipe-price]' );

    if ( dataCraftCount.length > 0 && parseInt( dataCraftCount.attr( 'data-craft-count' ) ) > 0 && value.length > 0 && parseInt( value.attr( 'data-recipe-price' ) ) >= 0 ) {
        let craftCount       = parseInt( dataCraftCount.attr( 'data-craft-count' ) );
        value = parseInt( value.attr( 'data-recipe-price' ) );
        let valueForAllCount = value * craftCount;
        priceContainer.css( 'visibility', 'visible' );
        $( 'span#recipe-price-craft-count' ).html( craftCount );
        $( 'span#recipe-price-craft-cost' ).html( valueForAllCount.toLocaleString() );
    }
}

$( ".disable-row" ).on( 'click', function() {
    $( this ).closest( 'tr' ).toggleClass( 'disabled-with-js' );
    updatePrices();
} ).change();

$( "div[data-recipe-price] input#recipe-price" ).on( 'change', function() {
    let input          = $( this );
    let value          = parseInt( input.val() );
    let priceContainer = $( 'p#recipe-price-craft-with-count' );

    if ( value < 0 ) {
        value = 0;
    }

    priceContainer.css( 'visibility', 'hidden' );

    updateColumn( input, 'data-recipe-price', value );
    updateRecipesTotal();
} );


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

    updateRecipesTotal();
    updatePrices();
} );

$( function() {
    $( '[data-toggle="tooltip"]' ).tooltip()
} );

function addConfirm() {
    $( '.resource-link' ).click( function() {
        return confirm( 'При переходе все заполненные данные пропадут.' );
    } )
}
