@extends('pages.user.main-template', ['title' => $title ?? 'Личный кабинет'])
@section('user-content')
    @if(isset($title))
@section('title', $title)
@endif
<p>Email: {{$user->email}}</p>
<p>Name: {{$user->name}}</p>

<form method="post" action="{{ route( 'user.update' ) }}">
    @csrf
    <div class="form-check">
        <input class="form-check-input" value="1" type="checkbox" {{$user->isEnableAnimation ? 'checked' : ''}} name="is_enable_animation" id="is_enable_animation">
        <label class="form-check-label" for="is_enable_animation">
            Включить эпичную анимацию
        </label>
    </div>

    <button class="nk-btn ready">
        <span class="link-effect-inner"><span class="link-effect-l"><span>Сохранить</span></span><span class="link-effect-r"><span>Сохранить</span></span><span class="link-effect-shade"><span>Сохранить</span></span></span>
    </button>
</form>
@endsection
