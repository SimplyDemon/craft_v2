<li>
    <a href="{{ route( 'resources.show',$single ) }}">
        <img width="30" src="{{asset('storage') . '/' . $single->img}}" alt="{{$single->name}}">
        {{$single->name}}
    </a> {{$value}}
</li>
