<!-- START: Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- END: Scripts -->
<script type="text/javascript">

    // Ajax live search
    $( '#search' ).bind( 'keyup click', function() {
        let $value = $( this ).val();
        if ( $value.length > 1 ) {
            $.ajax( {
                type: 'post',
                url: '{{route('search.ajax')}}',
                data: { 's': $value },
                success: function( data ) {
                    let code = '';
                    if ( data !== null && data !== undefined ) {
                        $.each( data, function( index, value ) {
                            code += '<li><img style="margin-right: 5px" width="20px" src="' + value[ 'jsImg' ] + '" alt="' + value[ 'name' ] + '"><a href="' + value[ 'jsUrl' ] + '">' + value[ 'name' ] + '</a></li>';
                        } );
                    }

                    $( '#search_result-ul' ).html( code );
                }
            } );
        } else {
            $( '#search_result-ul' ).html( '' );
        }
    } )


</script>

@stack('extra-scripts')
