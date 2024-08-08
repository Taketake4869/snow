<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ゲレンデ詳細</h1>
        <div class='skiResorts'>
            @foreach ($comments as $comment)
                <div class='comment'>
                    <p class='condition'>{{ $comment->condition }}</p>
                    <p class='recommended_course'>{{ $comment->recommended_course }}</p>
                </div>
            @endforeach
                <div class='ski_resort'>
                    <p class='name'>{{ $ski_resort->name }}</p>
                    @if($ski_resort->snowfall)
                        <p>積雪あり<p>
                        @else
                            <p>積雪なし</p>
                        @endIf
                </div>
            @foreach($ski_resort->hotels as $hotel)   
                    <p>ホテル名：{{ $hotel->name }}</p>
                    <p>住所：{{ $hotel->address }}</p>
                    <p>ホテルまでの距離：{{ $hotel->pivot->distance }}</p>
                    <p>最高料金：{{ $hotel->max_fee }}円</p>
                    <p>最低料金：{{ $hotel->min_fee }}円</p>
            @endforeach
        </div>
    </body>
</html>

