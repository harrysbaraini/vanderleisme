<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vanderlei Amancio :: Full Stack Developer</title>
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
