<div class="col-lg-8">
    <div class="nk-gap-4"></div>

    <div class="nk-blog-list-classic">

        @foreach($all as $post)
            @include('pages.posts.index.list-card',[
                'single' => $post,
            ])
        @endforeach

    </div>

    <div class="nk-gap-4"></div>
</div>
