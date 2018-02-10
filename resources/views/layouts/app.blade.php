<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!--CRSF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','larabbs') -Laravle 进阶教程</title>

    <!-- Sytles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app"  class="{{ route_class() }}-page">

        @include('layouts._header')

        <div class="container">

            @yield('content')

        </div>

        @include('layouts._footer')
    </div>

    <script scr="{{ asset('js/app.js') }}"></script>

</body>
</html>
