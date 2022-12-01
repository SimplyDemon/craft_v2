<div class="col-lg-8">
    <div class="nk-blog-container nk-blog-container-offset">
        <!-- START: Post -->
        <div class="nk-blog-post nk-blog-post-single">
            <img class="nk-img-stretch" src="{{asset('storage') . '/' . $single->thumbnail}}"
                 alt="{{ $title ?? $single->title }}">

            <!-- START: Post Text -->
            <div class="nk-post-text mt-0">
                {!! $single->content !!}
            </div>
            <!-- END: Post Text -->

        </div>
        <!-- END: Post -->

        <div class="nk-gap-4"></div>
    </div>
</div>
