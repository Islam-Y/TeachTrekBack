<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Work+Sans:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    <link href="/css/app.css" rel="stylesheet">
{{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <title>@yield('title')</title>
</head>
<body>

@yield('content')

<script src="/js/app.js"></script>
</body>
</html>
