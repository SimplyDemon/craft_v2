<table class="table table-sm">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Price sell</th>
        <th scope="col">Price buy</th>
    </tr>
    </thead>
    <tbody>
    @foreach($all as $category => $items)
        <?php
        if ( is_numeric( $category ) ) {
            $categoryModel = \App\Models\Category::findOrFail( $category );
            $category      = '';
            if ( $categoryModel->category_id ) {
                $category .= \App\Models\Category::findOrFail( $categoryModel->category_id )->name . ' - ';
            }
            $category .= $categoryModel->name;
        }
        $collapseClass = 'collapse-' . str_replace( ' ', '', $category );
        ?>
        <tr>
            <td colspan="3">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target=".{{$collapseClass}}" aria-expanded="false" aria-controls="{{$category}}">{{$category}}</button>
            </td>
        </tr>

        @foreach($items as $single)
            <tr class="collapse {{$collapseClass}} show">
                <td>
                    <img src="{{asset('storage/' . $single->img)}}">{{$single->name}}
                </td>
                <td>
                    <input name="{{$prefix}}[{{$single->id}}][price_sell]" type="number" step="1" value="{{$single->pivot->price_sell ?? $single->price_sell}}">
                </td>
                <td>
                    <input name="{{$prefix}}[{{$single->id}}][price_buy]" type="number" step="1" value="{{$single->pivot->price_buy ?? $single->price_buy}}">
                </td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
