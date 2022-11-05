<div class="recipes-list swiper d-none" data-key="{{$key}}">
    <div class="swiper-wrapper">
        @foreach($recipes as $single)
            @include('pages.enchantment.parts.index.recipe-item', [
                  'single' => $single,
               ])
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
