<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($pageRoutes as $route)
        <url>
            <loc>{{$route['loc']}}</loc>
            <lastmod>{{$route['lastmod']}}</lastmod>
            <changefreq>{{$route['changefreq']}}</changefreq>
            <priority>{{$route['priority']}}</priority>
        </url>
    @endforeach
    @foreach ($recipes as $recipe)
        <url>
            <loc>{{route('recipes.show', $recipe->id)}}</loc>
            <lastmod>{{ date('c',strtotime($recipe->updated_at)) }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.5</priority>
        </url>
    @endforeach
</urlset>
