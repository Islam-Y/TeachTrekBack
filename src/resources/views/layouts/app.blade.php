<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Work+Sans:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    @stack('styles')

    <title>@yield('title')</title>

</head>

<body>

    @yield('content')

    <script src="{{ asset('js/toggle_user.js') }}"></script>
    <script src="{{ asset('js/gallery-org.js') }}"></script>
    <script src="{{ asset('js/likes.js') }}"></script>
    <script src="{{ asset('js/resume_constructor.js') }}"></script>
</body>

</html>
