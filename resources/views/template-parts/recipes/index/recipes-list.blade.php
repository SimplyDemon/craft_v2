<ul class="list-group">
    @foreach( $recipes as $recipe)
        <li class="list-group-item">
            <img width="30px" src="{{asset('storage') . '/' . $recipe->img}}">
            <a href="{{ route( 'recipes.show', [ 'id' => $recipe->id ] ) }}">
                {{$recipe->name}}
            </a>
            @if($recipe->gradeImage)
                <img src="{{$recipe->gradeImage}}">
            @endif
        </li>
    @endforeach
</ul>
