<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-whidth,intial-scale=1"> 
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="/css/admin.css">
    @yield('css')
</head>
<body>
    @yield('content')
    <!-- jsファイルの読み込み -->
    @yield('js')
</body>

</html>

