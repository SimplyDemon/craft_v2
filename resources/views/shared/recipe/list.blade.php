<div class="row">
    @foreach($recipes as $recipe)
        <div class="col-12 col-sm-6 col-lg-{{$colValue ?? 4}}">
            <p>
                <a href="{{ route( 'recipes.show', [ 'id' => $recipe->id ] ) }}">
                    @include('shared.recipe.thumbnail', [
                       'single' => $recipe,
                    ])
                    {{$recipe->name}}
                </a>

                @if($recipe->gradeImage)
                    <img src="{{$recipe->gradeImage}}" alt="grade">
                @endif
            </p>

            @if($recipe->description)
                <p>
                    <small>
                        {!! $recipe->description !!}
                    </small>
                </p>
            @endif
        </div>
    @endforeach
</div>
