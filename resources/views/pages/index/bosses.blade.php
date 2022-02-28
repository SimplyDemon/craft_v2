<div class="nk-tabs" id="rb">
    <ul class="nav nav-tabs rb-tab" role="tablist">
        @if(isset($bossesX1))
            <li class="nav-item">
                <a class="nav-link active color-main-1-important" href="#server-x1" role="tab" data-toggle="tab">x1 - Prime</a>
            </li>
        @endif
        @if(isset($bossesX5))
            <li class="nav-item">
                <a class="nav-link color-main-1-important" href="#server-x5" role="tab" data-toggle="tab">x5 - Asterios</a>
            </li>
        @endif
        @if(isset($bossesX7))
            <li class="nav-item">
                <a class="nav-link color-main-1-important" href="#server-x7" role="tab" data-toggle="tab">x7 - Phoenix</a>
            </li>
        @endif
    </ul>
    <div class="tab-content">
        @if(isset($bossesX1))
            <div role="tabpanel" class="tab-pane fade show active" id="server-x1">
                <div class="nk-gap-1"></div>

                <h2 class="nk-title h1">x1 - Prime</h2>
                <div class="nk-gap-2"></div>
                <div class="no-gutters">

                    @include('pages.index.bosses-tabs', [
                        'bosses' => $bossesX1,
                         'server' => 'x1',
                    ])

                </div>

                <div class="nk-gap-1"></div>
            </div>
        @endif
        @if(isset($bossesX5))
            <div role="tabpanel" class="tab-pane fade" id="server-x5">
                <div class="nk-gap-1"></div>

                <h2 class="nk-title h1">x5 - Asterios</h2>
                <div class="nk-gap-2"></div>
                <div class="no-gutters">

                    @include('pages.index.bosses-tabs', [
                          'bosses' => $bossesX5,
                          'server' => 'x5',
                      ])
                </div>

                <div class="nk-gap-1"></div>
            </div>
        @endif
        @if(isset($bossesX7))
            <div role="tabpanel" class="tab-pane fade" id="server-x7">
                <div class="nk-gap-1"></div>

                <h2 class="nk-title h1">x7 - Phoenix</h2>
                <div class="nk-gap-2"></div>
                <div class="no-gutters">

                    @include('pages.index.bosses-tabs', [
                          'bosses' => $bossesX7,
                          'server' => 'x7',
                      ])
                </div>

                <div class="nk-gap-1"></div>
            </div>
        @endif
    </div>
</div>
