<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->meta_description }}">
    <meta name="keywords" content="{{ $page->meta_keywords }}">
    <meta name="apple-mobile-web-app-title" content="{{ $page->meta_title }}">

    <meta property="og:site_name" content="{{ $page->meta_title }}">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="{{ $page->meta_title }}">
    <meta property="og:image" content="https://vanderleis.me/assets/img/planning.png">
    <meta property="og:description" content="{{ $page->meta_description }}">
    <meta property="og:url" content="https://vanderleis.me">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@vander_dev">
    <meta property="twitter:creator" content="@vander_dev">

    <link rel="canonical" href="https://vanderleis.me">
    <link rel="icon" href="/assets/img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">

    <title>{{ $page->meta_title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>
<body class="font-sans">
<div class="max-w-2xl mx-auto p-6">
    @include('_layouts.partials.nav')
    @yield('body')
    @include('_layouts.partials.form')
    @include('_layouts.partials.footer')
</div>

</body>
</html>
