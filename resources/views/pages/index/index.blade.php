@extends('layouts.app', [
	'faq' => $faq
])
@section('content')
    <div class="nk-main">
        @include('pages.index.hero')
        @include('pages.index.blog-fresh')
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
