<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrg-token" content="{{ csrf_token() }}">
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="https://fonts.googleapis.com/css? family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/admin.css') }}">
    
    <title>@yield('title')</title>
    
</head>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">ToDo App</a>
              <div class="my-navbar-control">
                @if(Auth::check())
                  <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
        ｜          <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                @else
                  <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
        ｜
                  <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
                @endif
              </div>
        </nav>
        <main class="py-6">
            @yield('content')
              @if(Auth::check())
                <script>
                  document.getElementById('logout').addEventListener('click', function(event) {
                  event.preventDefault();
                  document.getElementById('logout-form').submit();
                  });
                </script>
              @endif
        </main>
    </header>
</html>