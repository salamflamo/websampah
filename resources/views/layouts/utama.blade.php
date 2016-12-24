<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav>
        <a href="/">Home</a>
        <a href="/sampah/">Sampah</a>
    </nav>
</header>
<br>
@yield('content')
<br>
<footer>
    <p>
        made with &hearts; by doscom
    </p>
</footer>
</body>
</html>