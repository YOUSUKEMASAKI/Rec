<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{margin:0;}
    .edit_head{background-color: cornsilk;width: 100%;height: 80px;}
    .index_title{font-size: 40px;text-align: center;font-weight: bolder;color: rgb(21, 51, 21);}
    .edit_link{text-align:right;margin-right:40px;font-size:20px;}
    .edit_top_title{text-align:center;font-size:24px;font-weight:bolder;letter-spacing:5px;margin-bottom:50px;}
    .add_allItem{
        background-color: cornsilk;width:700px;margin-left:auto;margin-right:auto;border-radius:10px;}
    .add_items{display:flex;justify-content: center;padding-top:50px;}
    .add_item{font-weight:bolder;font-size:20px;}
    .add_item>input{width:200px;height:30px;}
    .add_send{padding-bottom:30px;}
    .add_itemR{padding-left:20px;}
    </style>
</head>
<body>
    <div class="edit_head">
        <p class="index_title">Rcs</p>
    </div>
    <div class="edit_link">
        <a href="/post">投稿一覧</a>
    </div>
    <div class="edit_top_title">新規投稿</div>
    <form action="/post/add" method="post" enctype="multipart/form-data">
    <div class="add_allItem">
        <div class = "add_items">
            <div class="add_item">
            @if($errors->has('product_name'))
                {{$errors->first('product_name')}}
            @endif
                商品名<input type="text" name="product_name">
            </div>
            <div class="add_item add_itemR">
            @if($errors->has('price'))
                {{$errors->first('price')}}
            @endif
                価格<input type="number" name="price">
            </div>
        </div>
        <div class="add_items">
            <div class="add_item">
            @if($errors->has('store'))
                {{$errors->first('store')}}
            @endif
                店名<input type="text" name="store">
            </div>
            <div class="add_item add_itemR">
            @if($errors->has('text'))
                {{$errors->first('text')}}
            @endif
                感想<input type="text" name="text">
            </div>
        </div>
        <div class="add_items add_send">
            <div class="add_item">
            @if($errors->has('image'))
                {{$errors->first('image')}}
            @endif
                画像<input type="file" name="image">
            </div>
            <div class="add_item">
                @csrf
                投稿する<input type="submit" value="send" value="send">
            </div>
        </div>
    </div>
    
    </form>
</body>
</html>