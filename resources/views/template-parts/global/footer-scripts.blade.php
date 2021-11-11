<!-- START: Scripts -->


<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/jquery.js') }}"></script>
<script src="{{ mix('js/extract-countdown.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>


<script type="text/javascript">
    $( '.nk-countdown' ).each( function eachCountdown() {
        let dateEnd = $( this ).attr( 'data-end' );
        $( this ).countdown( dateEnd, function( event ) {
            let totalHours = event.offset.totalDays * 24 + event.offset.hours;
            $( this ).html( event.strftime( '<div><span>' + totalHours + ':%M:%S</span></div>' ) );
        } );
    } );
</script>

@stack('extra-scripts')
