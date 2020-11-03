{{-- <button type="button" onclick="location.href='/tokus'">落としました</button>
<button type="button" onclick="location.href='/tokus/create'">見つけました</button> --}}

<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>tokutumu
        </title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="container">
        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='/tokus'">探している方はこちら</button>
        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='/tokus/create'">拾った方はこちら</button>

    </div>
</body>
</html>
