<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{background-color:cornsilk;}
    .login_head{width: 100%; height: 150px;}
    .login_title{ font-size: 40px; text-align: center; font-weight: bolder; color: rgb(21, 51, 21);}
    .login_section{text-align: center}
    .login_section > input{height:25px; width:250px;}
    .login_send{text-align:center; margin-top:30px;}
    .login_send > input{height:35px; width:150px; font-weight:bold;}
    </style>
</head>
<body>
    <div class="login_head">
        　　<p class="login_title">Rcs</p>
    </div>
        <form action="/hello/auth" method = "post">
            @csrf
                <div class="login_section">
                    <p class="aa">Eメール</p>
                    <input type="text" name="email">
                </div>
                <div class="login_section">
                    <p>パスワード</p>
                    <input type="password" name="password">
                </div>
                <div class="login_send">
                    <input type="submit" value="ログイン">
                </div>
        </form>
</body>
</html>