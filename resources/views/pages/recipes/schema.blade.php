<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Recipe",
      "author": "Craft Calculator",
      "datePublished": "{{date( 'Y-m-d', strtotime( $single->created_at ) )}}",
      "description": "{{$single->description_schema}}",
      "image": "{{asset('storage') . '/' . $single->img}}",
      "recipeIngredient": [
        @foreach($resourcesData as $resource)
        "{{$resource['name']}} x {{$resource['quantity']}}"{{$loop->last ? '' : ','}}
    @endforeach
    ],
    "name": "{{$single->name}}"
    }

</script>
