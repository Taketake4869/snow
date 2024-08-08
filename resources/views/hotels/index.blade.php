<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ホテル一覧</h1>
        <div class='hotels'>
            @foreach ($hotels as $hotel)
                <div class='hotel'>
                    <p class='name'>{{ $hotel->name }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>