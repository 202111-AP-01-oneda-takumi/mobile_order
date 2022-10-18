<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/ress/ress.min.css">
    <link rel="stylesheet" href="/css/modaal.min.css">
    <link rel="stylesheet" href="/css/style.css">
    @yield('css')
</head>

<body>
    <div class="wrapper">

        <div>
            @yield('news')
        </div>

        <header id="header" class="container">
            @include('includes.header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer id="footer" class="container main">
            @include('includes.footer')
        </footer>

    </div>



    <!-- jsファイルの読み込み -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/modaal.min.js"></script>
    <script src="/js/main.js"></script>
    @yield('js')
</body>

</html>
