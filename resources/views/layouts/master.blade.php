<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token. This is probably not necessary unless we are using ajax (eg. in jQuery) to do post request.  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
   

    <title>{{ config('app.name', 'Test Request Management System') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css\app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js\app.js') }}"></script>

    <!-- Scripts. This is required only when using vue.js without 'make:auth'.
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    -->
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        @yield('content')
    </div>

</body>
</html>
