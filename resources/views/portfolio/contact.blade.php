<!DOCTYPE html>
<html>
<head>
    <title>Moaz Reda | Laravel Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body>
<nav>
    <a href="/">Home</a> |
    <a href="/projects">Projects</a> |
    <a href="/contact">Contact</a>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
