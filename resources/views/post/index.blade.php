<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="index_head">
        <p class="index_title">Rcs</p>
    </div>
    <a href="/post/add">新規投稿</a>
    <a href="{{ url('/logout/user') }}"> ログアウト </a>
    @foreach($items as $item)
    <img src="{{ $item->image_path }}">
    {{$item->product_name}}
    {{$item->price}}
    {{$item->store}}
    {{$item->text}}
    @if(auth()->user()->id == $item->user_id)
    <a href="/post/edit?id={{$item->id}}">編集</a>
    @endif
    @endforeach
</body>
</html>