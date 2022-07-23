<div class="col-md-{{$colNumber}}">
    <div class="nk-box-2 nk-box-line">
        <!-- START: Counter -->
        <h2 class="nk-sub-title {{$boss->is_respawn_started ? 'respawn-started-color' : ''}}">
            {{$boss->name}}
        </h2>
        <p>Начало респа: <br>{{$boss->respawn_start}}</p>
        <p class="{{$boss->is_respawn_started ? 'respawn-started-color' : ''}}">Конец респа: <br>{{$boss->respawn_end}}
        </p>
        @if($boss->description)
            <p>{{$boss->description}}</p>
        @endif
        @if($boss->target)
            <p class="target">{{$boss->target}}</p>
        @endif
        <p class="nk-sub-title {{$boss->is_respawn_started ? 'respawn-started-color' : ''}}">{{$boss->status_respawn}}</p>
        <p>{{$boss->timer_status}}</p>
        <div class="nk-countdown sd-countdown nk-sub-title {{$boss->is_respawn_started ? 'respawn-started-color' : ''}}" data-end="{{$boss->timer_date}}" data-timezone="EST"></div>
        <!-- END: Counter -->
    </div>
</div>
