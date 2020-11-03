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
        </div>
        <h1 >ひろったものの登録</h1>
<form action="/takus" method="post">
    @csrf
    <p>
            カテゴリー<br>
        {{-- <input type="text" name="name" value="{{ old('name') }}"> --}}
    <select class="form-control">
        <option>選択してください</option>
        <option>貴重品</option>
        <option>身につけるもの</option>
        <option>読み書き物</option>
        <option>電子機器</option>
        <option>その他</option>
    </select>
        {{-- <select name="カテゴリー">
<option value="">選択してください</option>
<option value="貴重品">貴重品</option>
<option value="身につけるもの">身につけるもの</option>
<option value="読み書き物">読み書き物</option>
<option value="電子機器">電子機器</option>
<option value="その他">その他</option>
</select> --}}
    </p>
    <p>
        見つけた場所<br>
        <input type="text" class="form-control" placeholder="Text" input name="find" value="{{ old('find') }} ">
        {{-- <input type="text" name="find" value="{{ old('find') }}"> --}}
    </p>
    <p>
        届けた場所<br>
        <input type="text" class="form-control" placeholder="Text" input name="find" value="{{ old('find') }} ">
        {{-- <input type="text" name="deliver" value="{{ old('deliver') }}"> --}}
    </p>
    <p>
        写真<br>
        <input type="file" name="image_url" value="{{ old('image_url') }}">
    </p>
    <p>
        詳細(任意)<br>
        <textarea class="form-control" rows="3"></textarea>
        <textarea name="お問い合わせ内容" cols="50" rows="5"></textarea>
    </p>
    <div>
        <button type="button" onclick="location.href='/tokus'">戻る</button>
        <button type="button" onclick="location.href='/tokus'">登録</button>
    </div>
</form>
    </body>
    </html>