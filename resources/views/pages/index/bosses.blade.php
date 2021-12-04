<div class="nk-tabs" id="rb">
    <ul class="nav nav-tabs rb-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active color-main-1-important" href="#server-x1" role="tab" data-toggle="tab">x1 - Prime</a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-main-1-important" href="#server-x5" role="tab" data-toggle="tab">x5 - Asterios</a>
        </li>
    </ul>
    <div class="tab-content">
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
    </div>
</div>
