<ul class="list-group">
    @foreach( $recipes as $recipe)
        <li class="list-group-item">
            <img width="30" src="{{asset('storage') . '/' . $recipe->img}}" alt="img">
            <a href="{{ route( 'recipes.show', [ 'id' => $recipe->id ] ) }}">
                {{$recipe->name}}
            </a>
            @if($recipe->gradeImage)
                <img src="{{$recipe->gradeImage}}" alt="grade">
            @endif
        </li>
    @endforeach
</ul>
