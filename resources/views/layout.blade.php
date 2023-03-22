<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', "resources/css/app.js"])
    <title>Document</title>
</head>
<body>
<x-layout.header>

</x-layout.header>
<nav class="h-10v bg-nav">
    <h2>MENU</h2>
</nav>
<main class="h-65v bg-main">
    @yield('main')
</main>
<footer class="h-10v bg-footer">
    <h2>footer</h2>
</footer>
</body>
</html>
