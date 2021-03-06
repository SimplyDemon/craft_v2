@extends('pages.user.main-template', ['title' => $title ?? 'Калькулятор крафта Asterios'])
@section('user-content')
    @if(isset($title))
@section('title', $title)
@endif
<form method="post" action="{{ route( 'conversations.store' ) }}">
    @csrf
    <div class="form-group">
        <label for="title">
            Тема
        </label>
        <input class="form-control" type="text" name="title" id="title" value="{{old('title','')}}" required>
    </div>

    <button class="nk-btn ready">
        <span class="link-effect-inner"><span class="link-effect-l"><span>Создать</span></span><span class="link-effect-r"><span>Создать</span></span><span class="link-effect-shade"><span>Создать</span></span></span>
    </button>
</form>
@endsection
