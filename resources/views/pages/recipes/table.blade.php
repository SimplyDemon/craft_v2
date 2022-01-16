<table class="table recipe mobile-font-size">
    <thead>
    <tr>
        <th scope="col">Ресурс</th>
        <th scope="col">Кол</th>
        <th scope="col" class="mobile-max-width">В наличии</th>
        <th scope="col" class="mobile-max-width">Цена за штуку</th>
        <th scope="col" class="mobile-min-width">Цена за все</th>
        <th scope="col" class="mobile-hide">Исклю-<br>чить</th>
    </tr>
    </thead>
    <tbody>
    @foreach($resourcesData as $resource)
        @include('pages.recipes.table-resource-line-show')
    @endforeach

    @include('pages.recipes.table-resource-total-show')

    </tbody>
</table>
