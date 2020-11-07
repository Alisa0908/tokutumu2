{{-- 省略するための文章 --}}

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>tokutumu</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
    @include('layouts.header')
        <div class="container">
            @yield('content')
        </div>
    </body>
    @include('layouts.footer')
</html>