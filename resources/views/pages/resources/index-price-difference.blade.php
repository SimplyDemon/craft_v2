<div class="row">
    <div class="col-6 pb-10">
        <h4>Топ ресурсов, которые <b class="sd-color-green">выросли</b> по цене в адене</h4>
        <ol>
            @foreach($historyDifference['positiveNumberTop'] as $positiveNumberTop)
                <?php
                $single = App\Models\Resource::findOrFail( $positiveNumberTop['resourceId'] );
                ?>
                @include('pages.resources.index-list-price-difference', ['single' => $single, 'value' => $positiveNumberTop['text']])
            @endforeach
        </ol>
    </div>

    <div class="col-6 pb-10">
        <h4>Топ ресурсов, которые <b class="sd-color-red">упали</b> по цене в адене</h4>
        <ol>
            @foreach($historyDifference['negativeNumberTop'] as $positiveNumberTop)
                <?php
                $single = App\Models\Resource::findOrFail( $positiveNumberTop['resourceId'] );
                ?>
                @include('pages.resources.index-list-price-difference', ['single' => $single, 'value' => $positiveNumberTop['text']])
            @endforeach
        </ol>
    </div>

    <div class="col-6 pb-10">
        <h4>Топ ресурсов, которые <b class="sd-color-green">выросли</b> по цене в процентах</h4>
        <ol>
            @foreach($historyDifference['positivePercentTop'] as $positivePercentTop)
                <?php
                $single = App\Models\Resource::findOrFail( $positivePercentTop['resourceId'] );
                ?>
                @include('pages.resources.index-list-price-difference', ['single' => $single, 'value' => $positivePercentTop['percentText']])
            @endforeach
        </ol>
    </div>

    <div class="col-6 pb-10">
        <h4>Топ ресурсов, которые <b class="sd-color-red">упали</b> по цене в процентах</h4>
        <ol>
            @foreach($historyDifference['negativePercentTop'] as $negativePercentTop)
                <?php
                $single = App\Models\Resource::findOrFail( $negativePercentTop['resourceId'] );
                ?>
                @include('pages.resources.index-list-price-difference', ['single' => $single, 'value' => $negativePercentTop['percentText']])
            @endforeach
        </ol>
    </div>

</div>
