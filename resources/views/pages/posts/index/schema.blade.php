<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Blog",
        "@id": "{{route('posts.index')}}",
        "mainEntityOfPage": "{{route('posts.index')}}",
        "name": "{{$title}}",
        "description": "{{$description}}",
        "publisher": {
            "@type": "Person",
            "@id": "{{route('index')}}",
            "name": "Craft Calculator",
            "url": "{{route('index')}}"
        },
        "blogPost": [
         @foreach($all as $single)
        {
            "@type": "BlogPosting",
            "@id": "{{route('posts.show', $single)}}",
            "mainEntityOfPage": "{{route('posts.show', $single)}}",
            "headline": "{{$single->title}}",
            "name": "{{$single->title}}",
            "description": "{{$single->excerpt}}",
            "datePublished": "{{date( 'Y-m-d', strtotime( $single->created_at ) )}}",
            "dateModified": "{{date( 'Y-m-d', strtotime( $single->updated_at ) )}}",
            "author": {
                "@type": "Person",
                "@id": "{{route('index')}}",
                "name": "Craft Calculator"
                "url": "{{route('index')}}",
            },
            "image": {
                "@type": "ImageObject",
                "@id": "{{asset('storage') . '/' . $single->thumbnail}}",
                "url": "{{asset('storage') . '/' . $single->thumbnail}}",
                "height": "{{getimagesize(asset('storage') . '/' . $single->thumbnail)[1]}}",
                "width": "{{getimagesize(asset('storage') . '/' . $single->thumbnail)[0]}}"
            },
            "url": "{{route('posts.show', $single)}}",
            "keywords": [
                @foreach(explode(',', $single->keywords) as $keyword)
            "{{trim($keyword)}}"{{$loop->last ? '' : ','}}
        @endforeach
        ]
    }{{$loop->last ? '' : ','}}
    @endforeach
    ]
}


</script>
