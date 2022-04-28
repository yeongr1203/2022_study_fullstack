<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin: 0; padding: 0;}
        body { box-sizing: border-box; display: block; }
        body> div > a {width:300px;}
        .main_logo { display: block; margin: 50px auto; width: 300px; justify-content: center; }
        form { text-align: center; }
        form { padding: 30px 0px;}
        form > div { margin: 5px 0px;}
        form > div > input { display: inline-block; width: 300px; height: 40px; margin: 3px 0px;
                                border: 1px solid #1EC800; background-color: #cccccc30;}
        .sub_login >input { background-color: #1EC800; color: #fff; font-size: large; cursor:pointer; }
        form > .text > div { display: inline; font-size: 13px; }
        form > .text > div > a:hover { cursor:pointer; }
    </style>
    <title>로그인</title>
</head>
<body>
    <div><a><img src="img/naver_basic.png" class="main_logo"></a><div>
    <form action="login_proc.php" method="post">
        <div><input type="text" name="uid" placeholder=" 아이디"></div>
        <div><input type="password" name="upw" placeholder=" 비밀번호"></div>
        <div class="sub_login"><input type="submit" value="로그인"></div>
        <div class="text">
            <div><a href="">아이디 찾기</a></div>
            <div><a href="">비밀번호 찾기</a></div>
            <div><a href="join.php">회원가입</a></div>
        </div>
    </form>
</body>
</html>