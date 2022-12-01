<div class="col-md-6">
    <div class="nk-image-box-1-a nk-no-effect">
        <a href="{{route('posts.show', $single)}}" class="nk-image-box-link"></a>
        <img src="{{asset('storage') . '/' . $single->thumbnail}}" alt="{{ $single->title }}">
        <div class="nk-image-box-overlay nk-image-box-center">
            <div>
                <h3 class="nk-image-box-title h4">{{ $single->title }}</h3>
            </div>
        </div>
    </div>
</div>
