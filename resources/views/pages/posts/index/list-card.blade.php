<div class="nk-blog-post">
    <div class="nk-post-thumb">
        <a href="{{route('posts.show', $single)}}">
            <img src="{{asset('storage') . '/' . $single->thumbnail}}" alt="{{ $single->title }}"
                 class="nk-img-stretch">
        </a>
    </div>
    <div class="nk-post-content">
        <a href="{{route('posts.show', $single)}}">
            <h2 class="nk-post-title h3">
                {{ $single->title }}
            </h2>
        </a>
        <div class="nk-post-date">
            {{date( 'd.m.Y', strtotime( $single->created_at ) )}}
        </div>
        <div class="nk-post-text">
            {{ $single->description_seo }}
        </div>
        <a href="{{route('posts.show', $single)}}" class="nk-btn link-effect-4">
            Читать
        </a>
    </div>
</div>
