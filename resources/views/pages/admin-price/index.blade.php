@extends('admin.layouts.primary')
@section('content')
    <div class="card">
        <h1 class="card-header">
            {{ $title ?? 'Цены' }}
        </h1>
    </div>


    @if ($all)
        <form method="post">
            @csrf
            @method('POST')
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price sell</th>
                    <th scope="col">Price buy</th>
                </tr>
                </thead>
                <tbody>
                @foreach($all as $type => $items)
                    <tr>
                        <td colspan="3">
                            <h2 data-toggle="collapse" data-target=".collapse-{{$type}}" aria-expanded="false" aria-controls="{{$type}}">{{$type}}</h2>
                        </td>
                    </tr>

                    @foreach($items as $single)
                        <tr class="collapse collapse-{{$type}} show">
                            <td>{{$single->name}}</td>
                            <td>
                                <input name="{{$single->id}}[price_sell]" type="number" step="1" value="{{$single->price_sell}}">
                            </td>
                            <td>
                                <input name="{{$single->id}}[price_buy]" type="number" step="1" value="{{$single->price_buy}}">
                            </td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
            <button class="btn btn-primary">Сохранить</button>
        </form>
    @endif

@endsection
