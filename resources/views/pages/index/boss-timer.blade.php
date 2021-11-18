<div class="col-md-{{$colNumber}}">
    <div class="nk-box-2 nk-box-line">
        <!-- START: Counter -->
        <h2 class="nk-sub-title">{{$boss->name}}</h2>
        <p>Начало респа: <br>{{$boss->respawn_start}}</p>
        <p>Конец респа: <br>{{$boss->respawn_end}}</p>
        @if($boss->description)
            <p>{{$boss->description}}</p>
        @endif
        @if($boss->target)
            <p>{{$boss->target}}</p>
        @endif
        <p class="nk-sub-title">{{$boss->status_respawn}}</p>
        <p>{{$boss->timer_status}}</p>
        <div class="nk-countdown sd-countdown nk-sub-title" data-end="{{$boss->timer_date}}" data-timezone="EST"></div>
        <!-- END: Counter -->
    </div>
</div>
