<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Recipe",
      "author": "Craft Calc",
      "datePublished": "{{$single->created_at}}",
      "description": "{{$single->name}}",
      "image": "{{asset('storage') . '/' . $single->img}}",
      "recipeIngredient": [
        @foreach($single->resources as $resource)
        "{{$resource->name}} {{$resource->pivot->resource_quantity}}"{{$loop->last ? '' : ','}}
    @endforeach
    ],
"recipeYield": "{{$single->craft_count}} шт."
    }


</script>
