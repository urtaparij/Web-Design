<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="image/alienware.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gidole&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>

        <div class="space">
            <a href="/about"><img src="{{ asset('image/alienware.png')}}" class="logo"></a>
            <li>
                <a href="/model" class="menu">โมเดล</a>
                <a href="/about" class="menu">เกี่ยวกับเรา</a>
            </li>
        </div>
    </header>
    <body>
        @yield('content')
    </body>
</body>
</html>