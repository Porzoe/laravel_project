<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>サンプル</title>
</head>

<body>
    <h1>Vegetable_search</h1>
    <div style="font-size: x-large;">

        @foreach($vege_data as $vege)

        @if($vege["color"] ==='green')
            <div style="color: green;">
        @elseif($vege["color"] ==='red')
            <div style="color: red;">
        @else
            <div>
        @endif
                <br>
                <span>◆野菜名：</span><span>{{$vege["name"]}}</span>
                <br>
                <span>◆色:</span><span>{{$vege["color"]}}</span>
                <br>
                <span>◆値段:</span><span>{{$vege["price"]}}</span>
                <br>
            </div>
        @endforeach

        </div>

</body>

</html>