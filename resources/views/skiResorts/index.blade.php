<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ゲレンデ一覧</h1>
        <div class='skiResorts'>
            @foreach ($ski_resorts as $ski_resort)
                <div class='ski_resort'>
                    <a class='name'href="/skiresort/{{$ski_resort->id}}">{{ $ski_resort->name }}</a>
                </div>
            @endforeach
        </div>
    </body>
</html>