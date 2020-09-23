<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <livewire:styles />
</head>
<body class="bg-white-100 antialiased leading-none">
    <div id="app">
        @include("inc.nav.navigation")
        <div class="mt-20">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <livewire:scripts />
</body>
</html>
