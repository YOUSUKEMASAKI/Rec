<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
　　 <a href="/post">投稿一覧</a>
    <form action="/post/edit" method="post" enctype="multipart/form-data">
        <table>
        @csrf
        <h3>編集ページ</h3>
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>商品名</th><td><input type="text" name="product_name" value="{{$form->product_name}}"></td></tr>
        <tr><th>価格</th><td><input type="number" name="price" value="{{$form->price}}"></td></tr>
        <tr><th>店名</th><td><input type="text" name="store" value="{{$form->store}}"></td></tr>
        <tr><th>感想</th><td><input type="text" name="text" value="{{$form->text}}"></td></tr>
        <img src="{{ $form->image_path }}">
        <tr><th>画像</th><td><input type="file" name="image"></td></tr>
        <tr><th>投稿する</th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>

    <form action="/post/delete/{{$form->id}}" method="post">
        @csrf
        <input type="submit" value="消去">
    </form>
</body>
</html>