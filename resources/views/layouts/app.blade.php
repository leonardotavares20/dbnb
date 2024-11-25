<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Krona+One&display=swap"
          rel="stylesheet">
    @vite('resources/js/app.js')
    <title>@yield('title', 'Título Padrão')</title>
</head>

<body class="h-full font-jost">
    <div class="px-10">
        @yield('content')
    </div>
</body>

</html>
