<div class="nk-widget-post">
    <a href="{{route('posts.show', $single)}}" class="nk-image-box-1 nk-post-image">
        <img src="{{asset('storage') . '/' . $single->thumbnail}}" alt="{{ $single->title }}">
    </a>
    <a href="{{route('posts.show', $single)}}">
        <h3 class="nk-post-title">
            {{ $single->title }}
        </h3>
    </a>
    <div class="nk-post-meta-date">
        {{date( 'd.m.Y', strtotime( $single->created_at ) )}}
    </div>
</div>
