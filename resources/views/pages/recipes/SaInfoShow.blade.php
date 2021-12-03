<div class="sa-info">
    <p>
        Уровень СА: {{$saLvl}} Гемов:
        <a href="{{route('resources.show', $gem)}}">
            <img width='20' src="{{asset('storage') . '/' . $gem->img}}" alt='{{$gem->name}}'>
        </a>
        {{$saGemCount}} ({{$gemsPriceTotal}})
    </p>
    <p>
        <img width='20' src='{{$saRedImg}}' alt='SA Red'><i class="color-main-1-important">{{$saRedName}}</i> {{$saRedDescription}}
    </p>
    <p>
        <img width='20' src='{{$saGreenImg}}' alt='SA Green'><i class="color-main-1-important">{{$saGreenName}}</i> {{$saGreenDescription}}
    </p>
    <p>
        <img width='20' src='{{$saBlueImg}}' alt='SA Blue'><i class="color-main-1-important">{{$saBlueName}}</i> {{$saBlueDescription}}
    </p>
</div>
