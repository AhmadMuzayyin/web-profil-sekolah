@props(['title' => '', 'description' => '', 'keywords' => '', 'image' => null, 'type' => 'website'])

@php
    use App\Helpers\SeoHelper;
    
    $metaTitle = SeoHelper::metaTitle($title);
    $metaDescription = SeoHelper::metaDescription($description);
    $metaKeywords = SeoHelper::metaKeywords($keywords);
    $canonicalUrl = SeoHelper::canonicalUrl();
    $ogTags = SeoHelper::ogTags($title, $description, $image, $type);
@endphp

<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<meta name="keywords" content="{{ $metaKeywords }}">
<link rel="canonical" href="{{ $canonicalUrl }}">

<!-- Open Graph Meta Tags -->
@foreach ($ogTags as $property => $content)
    <meta property="{{ $property }}" content="{{ $content }}">
@endforeach

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $ogTags['og:image'] }}">
