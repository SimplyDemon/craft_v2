<img
    class="rounded
@if($single->favorite_text) recipe-info_favorite-img
@elseif($single->is_available_for_sub_quest) recipe-info_sub-quest-img
@elseif($single->is_epic) recipe-info_epic-img
@endif
        " width="32"
    src="{{asset('storage') . '/' . $single->img}}" alt="{{$single->name}}"
    @if($single->favorite_text)data-toggle="tooltip" data-placement="top"
    title="{{$single->favorite_text}}" @elseif($single->is_available_for_sub_quest)
    data-toggle="tooltip" data-placement="top"
    title="Оружие подходит для саб класс квеста." @endif
>
