$( '.sd-countdown' ).each( function eachCountdown() {
    let dateEnd = $( this ).attr( 'data-end' );
    $( this ).countdown( dateEnd, function( event ) {
        let totalHours = event.offset.totalDays * 24 + event.offset.hours;
        $( this ).html( event.strftime( '<div><span>' + totalHours + ':%M:%S</span></div>' ) );
    } );
} );
