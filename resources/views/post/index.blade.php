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
    <div class="index_path">
        <a href="/post/add">新規投稿</a>
        <a href="{{ url('/logout/user') }}"> ログアウト </a>
    </div>
    @foreach($items as $item)
    <div class="index_posts">
        <div class="index_post">
            <img src="{{ $item->image_path }}">
            <div class="index_postItem">
                <div class="index_item">商品名：
                {{$item->product_name}}
                </div>
                <div class="index_item">価格：
                {{$item->price}}
                </div>
                <div class="index_item">店名：
                {{$item->store}}
                </div>
                <div class="index_item">感想：
                {{$item->text}}
                </div>
                @if(auth()->user()->id == $item->user_id)
                <a href="/post/edit?id={{$item->id}}">編集</a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>