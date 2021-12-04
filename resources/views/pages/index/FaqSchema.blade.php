<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
    @foreach($faq as $question => $answer)
        {
        "@type": "Question",
        "name": "{{$question}}",
        "acceptedAnswer": {
        "@type": "Answer",
        "text": "<p>{!! $answer !!}</p>"
        }
    }{{$loop->last ? '' : ','}}
    @endforeach
    ]
}



</script>
