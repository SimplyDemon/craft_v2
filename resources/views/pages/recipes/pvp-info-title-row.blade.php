@if(is_array($cost[array_key_first($cost)]))
    @foreach($cost as $key => $value)

        @include('pages.recipes.pvp-info-title-row-cost', [
    'title' => $key,
   'costAdena' => $value['adena'],
   'costFame' => $value['fame'],
   ])
    @endforeach
@else
    @include('pages.recipes.pvp-info-title-row-cost', [
    'costAdena' => $cost['adena'],
    'costFame' => $cost['fame'],
 ])
@endif
