{{-- 省略するための文章 --}}

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        {{-- スマホへのレスポンシブ --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @include('layouts.header')
        <div class="container">
            <div class="row" id="content">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
 
    <div>
        @include('layouts.footer')
    </body>
</html>