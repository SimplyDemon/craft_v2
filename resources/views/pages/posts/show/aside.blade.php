<div class="col-lg-4">
    <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
        <div class="nk-gap-4"></div>
        <div class="nk-widget">
            <h4 class="nk-widget-title">Свежее</h4>
            <div>
                @foreach($recentPosts as $post)
                    @include('pages.posts.shared.aside-card',[
                        'single' => $post,
                    ])
                @endforeach
            </div>
        </div>
        <div class="nk-gap-4"></div>

    </aside>
</div>