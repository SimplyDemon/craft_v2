<script defer src="{{ mix('js/manifest.js') }}"></script>
<script defer src="{{ mix('js/jquery.js') }}"></script>
<script defer src="{{ mix('js/app.js') }}"></script>

@stack('extra-scripts')

@if(Route::is('recipes.index') || Route::is('non_craftable'))
    <script defer src="{{ mix('js/recipes.js') }}"></script>
@endif

@if(Route::is('recipes.show'))
    <script defer src="{{ mix('js/recipes-show.js') }}"></script>
@endif

@if(Route::is('user.price') || Route::is('recipes.index')|| Route::is('admin_prices'))
    <script defer src="{{ mix('js/ajax-search.js') }}"></script>
@endif

@if(Route::is('resources.show'))
    <script defer src="{{ mix('js/chart.js') }}"></script>
@endif

@if(Route::is('bosses_respawn'))
    <script defer src="{{ mix('js/index.js') }}"></script>
@endif
