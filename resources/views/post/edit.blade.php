<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{margin:0;}
    .edit_head{background-color: cornsilk;width: 100%;height: 80px;}
    .index_title{font-size: 40px;text-align: center;font-weight: bolder;color: rgb(21, 51, 21);}
    .edit_link{text-align:right;margin-right:40px;font-size:20px;}
    .edit_top_title{text-align:center;font-size:24px;font-weight:bolder;letter-spacing:5px;}
    .edit_post_frame{background-color: cornsilk;margin-top:50px;margin-left: 150px;margin-right: 150px;border-radius: 30px;}
    .edit_post{display: flex;justify-content: center;padding-top:30px;padding-bottom:30px;}
    .edit_post_table{margin-left:30px;}
    </style>
</head>
<body>
    <div class="edit_head">
        <p class="index_title">Rcs</p>
    </div>
    <div class="edit_link">
        <a href="/post">投稿一覧</a>
    </div>
    <div class="edit_top_title">投稿編集</div>
    <form action="/post/edit" method="post" enctype="multipart/form-data">
    @csrf
    <div class="edit_post_frame">
        <div class="edit_post">
            <div class="edit">
                <input type="hidden" name="id" value="{{$form->id}}">
                <img src="{{ $form->image_path }}">
            </div>
            <div class="edit_post_table">
                <table>
                    <tr><th>商品名</th><td><input type="text" name="product_name" value="{{$form->product_name}}"></td></tr>
                    <tr><th>価格</th><td><input type="number" name="price" value="{{$form->price}}"></td></tr>
                    <tr><th>店名</th><td><input type="text" name="store" value="{{$form->store}}"></td></tr>
                    <tr><th>感想</th><td><input type="text" name="text" value="{{$form->text}}"></td></tr>
                    <tr><th>画像</th><td><input type="file" name="image"></td></tr>
                    <tr><th>投稿する</th><td><input type="submit" value="send"></td></tr>
                </form>
        </table>
            <form action="/post/delete/{{$form->id}}" method="post">
                @csrf
                <input type="submit" value="消去">
            </div>
        </div>
    </div>
    </form>

</body>
</html>