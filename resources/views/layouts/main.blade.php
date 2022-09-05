<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
<div class="header">
    <div class="container">
       <div class="header-content">
        <h2>Website Artikel</h2>

        <ul class="header-navigation">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
       </div>
    </div>
</div>

<div class="content">
    <div class="container">
        @yield('content')
    </div>
</div>
    
</body>
</html>