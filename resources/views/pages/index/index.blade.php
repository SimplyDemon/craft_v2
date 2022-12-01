@extends('layouts.app', [
	'faq' => $faq
])
@section('content')
    <div class="nk-main">
        @include('pages.index.hero')
        @if($recentPosts->isNotEmpty())
            @include('pages.index.posts-recent')
        @endif
        @include('pages.index.description')
        @include('pages.index.icons-block')
        @if($faq && is_array($faq))
            @include('pages.index.faq', [
                'faq' => $faq,
            ])
        @endif
        <div class="nk-gap-6"></div>
    </div>
@endsection

@push('extra-scripts')
    <script defer src="/ScrollToPlugin.min.js"></script>
@endpush
