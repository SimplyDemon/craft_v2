@extends('pages.user.main-template', ['title' => $title ?? 'Craft Calc'])
@section('user-content')
    <form method="post" action="{{ route( 'conversations.store' ) }}">
        @csrf
        <div class="form-group">
            <label for="title">
                Тема
            </label>
            <input class="form-control" type="text" name="title" id="title" value="{{old('title','')}}" required>
        </div>

        <button class="nk-btn link-effect-4 ready">
            <span class="link-effect-inner"><span class="link-effect-l"><span>Создать</span></span><span class="link-effect-r"><span>Создать</span></span><span class="link-effect-shade"><span>Создать</span></span></span>
        </button>
    </form>
@endsection
