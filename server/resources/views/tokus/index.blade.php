<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>tokutumu</title>
        <script src="{{ asset('js/app.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <ul>
                @foreach ($tokus as $toku)
                    <li class="list-unstyled border mb-5 pl-3 shadow">
                        <a href="/tokus/{{ $toku->id }}">{{ $toku->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </body>
    </html>

    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="{{ route('tokus.index') }}">tokutumu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('tokus.index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0" mechod="GET" action="{{ route('tokus.index') }}">
                <input class="form-control mr-sm-2" type="search" name="category" placeholder="カテゴリ">
                <input class="form-control mr-sm-2" type="search" name="name" placeholder="落とした場所">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
    </nav>
    
    <h1>探しているもの</h1>
    <form mechod="GET" action="{{ route('tokus.index') }}">
    <div class=>カテゴリー</div>
    <select class="form-control">
            <option>選択してください</option>
            <option>貴重品</option>
            <option>身につけるもの</option>
            <option>読み書き物</option>
            <option>電子機器</option>
            <option>その他</option>
        </select>
    <div>落とした場所</div>
    <input class="form-control mr-sm-2" type="search" name="name" placeholder="落とした場所">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">探す</button>
    </form>
    <a class="btn btn-default" href="/" role="button">戻る</a>
    <img src="tokutumu_img/img20.jpg"  class="img-circle img-responsive">
    {{-- <img src="tokutumu_img/img20.jpg" class="img-responsive" alt="Responsive image"> --}}
    