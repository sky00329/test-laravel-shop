<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - Shop Laravel</title>
        <script src="/js/app.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/css/app.css?<?php echo date("mj", time())?>">
    </head>
    <body>
        <header>
            <a href="/">首頁</a>
            <a href="user/auth/sign-up">註冊</a>
            <a href="#">登入</a>
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer>
        <a href="#">聯絡我們</a>
        </footer>
      
    </body>
</html>
