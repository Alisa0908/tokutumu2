<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>tokutumu</title>
    </head>
    <body>
        <ul>
            @foreach ($tokus as $toku)
            <li>
                <a href="/tokus/{{ $toku->id }}">{{ $toku->name }}</a>
            </li>
            @endforeach
            <button type="button" onclick="location.href='/tokus/'">おとしました</button>
            <button type="button" onclick="location.href='/tokus/create'">ひろいました</button>
    </ul>    
</body>
</html>