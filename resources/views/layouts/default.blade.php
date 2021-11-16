<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'nitomeyo App')- Laravel 新手入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<nav class="">
    <div class="container">
        <a class="navbar-brand" href="/home">Nitomeyo App</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
            <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        </ul>
    </div>
 </nav>
 <div class="container">
    @yield('content')
 </div>
</body>
</html>