<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <h1>로그인</h1>
    <form action="login_proc.php" method="post">
        <div><input type="text" name="uid" placeholder="아이디"></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div><input type="submit" value="로그인"></div>
    </form>
    <a href="join.php">회원가입</a>
</body>
</html>
<!-- 

폼테그로 묶는 이유는
여러개 값을 post로 보내기 위해서 폼으로 묶었고,
네임값으로 구분을 한다. 
로긴_피알오씨에서 네임에 적힌 값으로 포스트로 묶어 보낸 값들을 구분한다.


 -->