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
            <div class="row" id="content">
                <div class="col-md-3">
                    @include('layouts.sidebar')
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
 
    <div class="col-md-9">
        @include('layouts.footer')
    </body>
</html>