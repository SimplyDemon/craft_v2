@extends('layouts.app', [
	'recipe' => $single,
	])
@section('content')
    @if(!empty($title))
        @section('title', $title . ' | Предметы')
        @section('description',$single->description_seo_text)
    @endif
    @if(!empty($single->thumbnail))
        @section('seo-image', asset('storage') . '/' . $single->thumbnail)
    @endif
    @if(!empty($single->keywords))
        @section('meta_keywords', $single->keywords)
    @endif

    @if(!empty($canonicalUrl))
        @section('canonical', $canonicalUrl))
    @endif

    <div class="nk-main">

        @include('pages.posts.show.hero')

        <div class="container">
            <div class="row">
                @include('pages.posts.show.content')
                @if($recentPosts->isNotEmpty())
                    @include('pages.posts.show.aside')
                @endif
            </div>
            <div class="nk-gap-4"></div>
            <div class="nk-gap-3"></div>
        </div>

        <div class="nk-gap-6"></div>
    </div>

    @include('pages.posts.show.schema')
@endsection
