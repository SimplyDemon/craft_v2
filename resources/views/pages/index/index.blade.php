@extends('layouts.app', [
	'faq' => $faq
])
@section('content')
    <div class="nk-main">
        @include('pages.index.hero')
        @include('pages.index.icons-block')

        <div class="nk-box bg-dark-1 sd-background">
            <div class="container text-center">
                @include('pages.index.description')
            </div>
        </div>
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
