@if(isset($title))
    <div>
        @if($title === 'Нубл')
            @php($imageSrc = asset('images/noble_stone.webp' ))
        @elseif($title === 'С эссенцией')
            @php($imageSrc = asset('images/essence_dynasty.webp' ))
        @endif
        @if(isset($imageSrc))
            <img width='20' src='{{$imageSrc}}' alt='{{$title}}'>
        @endif
        <span>{{$title}}</span>
    </div>
@endif
<div class='recipe-pvp-cost row'>
    <div class='col-4 offset-2'>
        <div class='recipe-pvp-cost_text-title'>Стоимость:</div>
        <div>
            <img class='recipe-pvp-cost_text-resource-image' height='16' src='{{ asset('images/adena.webp' ) }}'
                 title='adena'
                 alt='adena'>{{prettifyNumber($costAdena)}}
        </div>
    </div>
    <div class='col-4 offset-1'>
        <div class='recipe-pvp-cost_text-title'>Требуется славы:</div>
        <img class='recipe-pvp-cost_text-resource-image' height='16' src='{{ asset('images/fame.webp' ) }}' title='fame'
             alt='fame'><span
            class='nk-btn-color-main-1'>{{prettifyNumber($costFame)}}</span>
    </div>
</div>
