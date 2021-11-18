<ul class="list-group">
    @foreach( $categories as $category)
        <div class="nk-accordion" id="accordion-category-{{$category->id}}" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="category-{{$category->id}}-heading">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-category-{{$category->id}}" href="#category-{{$category->id}}" aria-expanded="false" aria-controls="category-{{$category->id}}">
                        {{$category->name}}
                    </a>
                </div>
                <div id="category-{{$category->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="category-{{$category->id}}-heading">
                    <div class="nk-gap-1"></div>

                    @if($category->recipes)
                        @include('template-parts.recipes.index.recipes-list', ['recipes' => $category->recipes])
                    @endif

                    <div class="nk-gap-1"></div>
                </div>
            </div>
        </div>

    @endforeach
</ul>
