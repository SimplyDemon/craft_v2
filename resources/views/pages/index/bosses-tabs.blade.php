<div class="nk-tabs">
    <ul class="nav nav-tabs rb-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active color-main-1-important" href="#{{$server}}-subclass" role="tab" data-toggle="tab">Сабкласс РБ</a>
        </li>
        @if(!empty($bosses['epic']))
        <li class="nav-item">
            <a class="nav-link color-main-1-important" href="#{{$server}}-epic" role="tab" data-toggle="tab">Эпик РБ</a>
        </li>
        @endif
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="{{$server}}-subclass">
            <div class="nk-gap-1"></div>

            <h2 class="nk-title h1">Subclass RB respawn {{$server}}</h2>
            <div class="nk-gap-2"></div>
            <div class="row no-gutters">

                @foreach($bosses['subclass'] as $boss)
                    @include('pages.index.boss-timer', [
                         'boss' => $boss,
                         'colNumber' => 3,
                     ])
                @endforeach
            </div>

            <div class="nk-gap-1"></div>
        </div>
        @if(!empty($bosses['epic']))
        <div role="tabpanel" class="tab-pane fade" id="{{$server}}-epic">
            <div class="nk-gap-1"></div>

            <h2 class="nk-title h1">Epic RB respawn {{$server}}</h2>
            <p class="lead">
                Внимательно следите за игровым чатом во время респа РБ, в нём анонсируется, что РБ респнется в течении
                <span class="color-main-1-important">одного</span> или
                <span class="color-main-1-important">двух</span> часов.
            </p>
            <div class="nk-gap-2"></div>
            <div class="row no-gutters">

                @foreach($bosses['epic']  as $boss)
                    @include('pages.index.boss-timer', [
                         'boss' => $boss,
                         'colNumber' => 4,

                     ])
                @endforeach
            </div>

            <div class="nk-gap-1"></div>
        </div>
        @endif
    </div>
</div>
