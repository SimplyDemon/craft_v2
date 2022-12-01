<div class="container" id="demos">
    <div class="nk-gap-6"></div>
    <div class="row vertical-gap lg-gap">
        @foreach($recentPosts as $post)
            @include('pages.index.post-recent-card',[
                'single' => $post,
            ])
        @endforeach
    </div>
    <div class="nk-gap-6"></div>
</div>
