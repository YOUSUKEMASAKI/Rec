<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/post">投稿一覧</a>
    <form action="/post/add" method="post" enctype="multipart/form-data">
    @if($errors->has('product_name'))
        {{$errors->first('product_name')}}
    @endif
        <tr><th>商品名</th><td><input type="text" name="product_name"></td></tr>
    @if($errors->has('price'))
        {{$errors->first('price')}}
    @endif
        <tr><th>価格</th><td><input type="number" name="price"></td></tr>
    @if($errors->has('store'))
        {{$errors->first('store')}}
    @endif
        <tr><th>店名</th><td><input type="text" name="store"></td></tr>
    @if($errors->has('text'))
        {{$errors->first('text')}}
    @endif
        <tr><th>感想</th><td><input type="text" name="text"></td></tr>
    @if($errors->has('image'))
        {{$errors->first('image')}}
    @endif
        <tr><th>画像</th><td><input type="file" name="image"></td></tr>
    <table>
        @csrf
        <tr><th>投稿する</th><td><input type="submit" value="send" value="send"></td></tr>
    </table>
    </form>
</body>
</html>