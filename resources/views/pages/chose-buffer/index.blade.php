@extends('layouts.app')
@section('content')
    @if(isset($title))
        @section('title', $title)
    @endif
    @section('description',$description)
    <div class="nk-main chose-buffer">

        <div class="nk-box">
            <div class="container">
                <div class="nk-gap-5"></div>
                <h1 class="nk-title">{{ $title }}</h1>
            </div>
        </div>

        <div class="container">
            <p>
                {!! $content !!}
            </p>


            @include('pages.chose-buffer.parts.index.chose-pp')
            @include('pages.chose-buffer.parts.index.chose-wc')
            @include('pages.chose-buffer.parts.index.chose-se')

            @include('pages.chose-buffer.parts.index.why-not-ee')
            @include('pages.chose-buffer.parts.index.why-not-wc')
            @include('pages.chose-buffer.parts.index.why-not-pp')


            <div class="questions">
                @foreach($questions as $question)
                    @include('pages.chose-buffer.parts.index.question', [
                          'question' => $question,
                       ])
                @endforeach
            </div>

            <button class="nk-btn nk-btn-rounded nk-btn-color-main-1 reset-chose-buffer">
                Сбросить
            </button>

            <div class="nk-gap-4"></div>
            <div class="nk-gap-3"></div>
        </div>

    </div>

@endsection
