@extends('layouts.app')
@section('content')
    @if(isset($title))
        @section('title', $title)
    @endif
    @if($keywords)
        @section('meta_keywords', $keywords)
    @endif
    @section('description', $description)
    <div class="nk-main">

        @include('pages.posts.index.hero')

        <div class="container">
            <div class="row">
                @include('pages.posts.index.list')
                @include('pages.posts.index.aside')
            </div>
        </div>

    </div>

    @include('pages.posts.index.schema')
@endsection
