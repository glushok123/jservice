<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($sub_categorys as $sub_category)
        <url>
            <loc>{{ route('sub_category.show', ['slug_sub_category' => $sub_category->slug]) }}</loc>
            <lastmod>{{ $sub_category->updated_at->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
</urlset>