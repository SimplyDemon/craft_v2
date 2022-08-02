<div class="sa-info">
    <p>
        Уровень СА: <span class="nk-btn-color-main-1">{{$saLvl}}</span> Гемов:
        <a class="no-decoration resource-link" href="{{route('resources.show', $gem)}}">
            <img width='20' src="{{asset('storage') . '/' . $gem->img}}" alt='{{$gem->name}}' title="{{$gem->name}}">
        </a>
        <span class="nk-btn-color-main-1">{{$saGemCount}}</span> ({{$gemsPriceTotal}})
    </p>
    <p>
        <img width='20' src='{{$saRedImg}}' title="СА красный" alt='SA Red'><i class="color-main-1-important">{{$saRedName}}</i> {{$saRedDescription}}
    </p>
    <p>
        <img width='20' src='{{$saGreenImg}}' title="СА зелёный" alt='SA Green'><i class="color-main-1-important">{{$saGreenName}}</i> {{$saGreenDescription}}
    </p>
    <p>
        <img width='20' src='{{$saBlueImg}}' title="СА синий" alt='SA Blue'><i class="color-main-1-important">{{$saBlueName}}</i> {{$saBlueDescription}}
    </p>
</div>
