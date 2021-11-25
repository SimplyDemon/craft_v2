let filter            = {};
filter.category       = null;
filter.categoryParent = null;
filter.grade          = null;
filter.percent        = null;

let items = $( '.col-items .item' );

$( ".col-categories a" ).on( 'click', function( e ) {
    e.preventDefault();
    let dataCategoryAttr       = $( this ).attr( 'data-category' );
    let dataCategoryParentAttr = $( this ).attr( 'data-category-parent' );
    if ( dataCategoryAttr && dataCategoryAttr.length > 0 ) {
        filter.categoryParent = null
        filter.category       = dataCategoryAttr;
    } else if ( dataCategoryParentAttr && dataCategoryParentAttr.length > 0 ) {
        filter.category       = null
        filter.categoryParent = dataCategoryParentAttr;
    } else {
        console.log( 'error, not found attr!' )
        return;
    }
    let filterSelector = generateFilterSelector( filter );
    $( this ).addClass( 'category-active' );
    $( ".col-categories a" ).not( this ).removeClass( 'category-active' );

    items.hide();
    items.filter( filterSelector.show ).show();
} ).change();


$( ".grade a" ).on( 'click', function( e ) {
    e.preventDefault();
    let gradeAttr = $( this ).attr( 'data-grade' );
    $( this ).closest( 'ul' ).find( 'li' ).removeClass( 'active' );
    $( this ).closest( 'li' ).addClass( 'active' );
    if ( gradeAttr && gradeAttr.length > 0 ) {
        filter.grade = gradeAttr;
    }
    let filterSelector = generateFilterSelector( filter );

    items.hide();
    items.filter( filterSelector.show ).show();
} ).change();

$( ".percent a" ).on( 'click', function( e ) {
    e.preventDefault();
    $( this ).tooltip( 'hide' );
    let percentAttr = $( this ).attr( 'data-percent' );
    $( this ).closest( 'ul' ).find( 'li' ).removeClass( 'active' );
    $( this ).closest( 'li' ).addClass( 'active' );
    if ( percentAttr && percentAttr.length > 0 ) {
        filter.percent = percentAttr;
    }
    let filterSelector = generateFilterSelector( filter );

    items.hide();
    items.filter( filterSelector.show ).show();
} ).change();


function generateFilterSelector( filter ) {
    let selector  = {};
    let dataAttribute;
    selector.show = '';
    selector.hide = '';

    if ( filter.category && filter.category.length > 0 ) {
        if ( filter.category !== 'any' ) {
            dataAttribute = '[data-category="' + filter.category + '"]';
            selector.show += dataAttribute;
            selector.hide += ':not(' + dataAttribute + ')';
        }
    } else if ( filter.categoryParent && filter.categoryParent.length > 0 ) {
        dataAttribute = '[data-category-parent="' + filter.categoryParent + '"]';
        selector.show += dataAttribute;
        selector.hide += ':not(' + dataAttribute + ')';
    }

    if ( filter.grade && filter.grade.length > 0 && filter.grade !== 'any' ) {
        dataAttribute = '[data-grade="' + filter.grade + '"]';
        selector.show += dataAttribute;
        selector.hide += ':not(' + dataAttribute + ')';
    }

    if ( filter.percent && filter.percent.length > 0 && filter.percent !== 'any' ) {
        dataAttribute = '[data-percent="' + filter.percent + '"]';
        selector.show += dataAttribute;
        selector.hide += ':not(' + dataAttribute + ')';
    }

    if ( selector.show.length === 0 ) {
        selector.show = '.item';
    }

    return selector;
}

$( "#reset" ).on( 'click', function( e ) {
    resetFilter();
    $( '#item-search' ).val( '' );
    items.show();

} );

export function resetFilter() {
    filter           = {};
    let categoryMain = $( '.col-categories a[data-category="any"]' );
    let gradeMain    = $( '.grade a[data-grade="any"]' ).closest( 'li' );
    let percentMain  = $( '.percent a[data-percent="any"]' ).closest( 'li' );
    if ( categoryMain.length > 0 && gradeMain.length > 0 && percentMain.length > 0 ) {
        $( ".col-categories a" ).not( categoryMain ).removeClass( 'category-active' );
        categoryMain.addClass( 'category-active' );

        $( "ul.grade li" ).not( gradeMain ).removeClass( 'active' );
        gradeMain.addClass( 'active' );

        $( "ul.percent li" ).not( percentMain ).removeClass( 'active' );
        percentMain.addClass( 'active' );
    }
}

$( function() {
    $( '[data-toggle="tooltip"]' ).tooltip()
} )

