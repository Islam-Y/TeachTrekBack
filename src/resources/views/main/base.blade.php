<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>

    @yield('title')

<body>

    @include('main.header')

    @yield('content')

    @include('main.footer')

    @include('main.scripts')

</body>

</html>