<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/jquery.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

@stack('extra-scripts')

@if(Route::is('recipes.index'))
    <script src="{{ mix('js/recipes.js') }}"></script>
@endif

@if(Route::is('recipes.show'))
    <script src="{{ mix('js/recipes-show.js') }}"></script>
@endif

@if(Route::is('user.price') || Route::is('recipes.index')|| Route::is('admin_prices'))
    <script src="{{ mix('js/ajax-search.js') }}"></script>
@endif

@if(Route::is('resources.show'))
    <script src="{{ mix('js/chart.js') }}"></script>
@endif
