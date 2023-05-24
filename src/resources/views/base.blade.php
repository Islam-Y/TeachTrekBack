<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    @include('styles')

    <title>{{ $title }}</title>

<body>

    @include('header')

    @yield('content')

    @include('footer')

    @include('scripts')

</body>

</html>