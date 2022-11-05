<div
    class="swiper-slide recipe"
    data-is-mage="{{$single->is_mage ? 'true' : 'false'}}"
    data-category-id="{{$single->category_id}}"
    data-m-attack="{{$single->m_attack}}"
    data-p-attack="{{$single->p_attack}}"
    data-is-two-hands="{{$single->is_two_hands}}"
    data-grade="{{str_replace(['80', '-', '84'],'', $single->grade)}}"
>

    <div>
        <a href="{{ route( 'recipes.show', $single ) }}">
            @include('shared.recipe.thumbnail', [
               'single' => $single,
            ])
            {{$single->name}}
        </a>

        @if($single->gradeImage)
            <img src="{{$single->gradeImage}}" alt="grade">
        @endif
    </div>

    @if($single->p_attack)
        <div class="recipe__p-attack">
            <img
                class="rounded recipe__soulshot-img"
                height="18px"
                src="{{asset('storage') . '/' . \App\Models\Recipe::where('name', 'Soulshot (' .str_replace(['80', '-', '84'],'', $single->grade) .'-grade)')->first()->img}}"
                alt="soul shot"> Физ атака:
            <span class="nk-btn-color-main-1">{{$single->p_attack}}</span>
        </div>
    @endif
    @if($single->m_attack)
        <div class="recipe__m-attack">
            <img
                class="rounded recipe__spiritshot-img"
                height="18px"
                src="{{asset('storage') . '/' . \App\Models\Recipe::where('name', 'Blessed Spiritshot (' .str_replace(['80', '-', '84'],'', $single->grade) .'-grade)')->first()->img}}"
                alt="spirit shots"> Маг атака:

            <span class="nk-btn-color-main-1">{{$single->m_attack}}</span>
        </div>
    @endif
    <button type="button" class="recipes-list__enchant-button nk-btn nk-btn-lg nk-btn-color-main-1">Заточить</button>
</div>
