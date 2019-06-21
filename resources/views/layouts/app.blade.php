<!doctype html>
<html lang="{{config('app.local')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="Viewport" content="width=device-width, initial-scale=1">
    <title>LSAPP</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
    @yield('content')
    </div>
</body>


</html>
