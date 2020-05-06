<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrg-token" content="{{ csrf_token() }}">
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="https://fonts.googleapis.com/css? family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/admin.css') }}">
    
    <title>@yield('title')</title>
    
</head>
        <main class="py-6">
            @yield('content')
        </main>
    </div>
</header>
</html>