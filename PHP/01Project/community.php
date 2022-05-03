<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/community.css">
    <title>Document</title>
</head>
<body>
    <header>
    <div class="h_1c">
            <div><a href="login.php">로그인</a></div>
            <div><a href="join.php">회원가입</a></div>
            <div><a href="profile.php">프로필</a></div>
            <div><a href="update_join.php">정보수정</a></div>
            <div><a href="logout.php">로그아웃</a></div>
        </div>
        <nav class="nav_li">
            <ul>
                <li><a href=""> NOTICE </a></li>
                <li><a href=""> INFORMATION </a></li>
                <li><a href=""> TIP </a></li>
                <li><a href=""> COMMUNITY </a>
                    <!-- <li><a href=""> 공구 </a></li>
                    <li><a href=""> 나눔 </a></li>
                    <li><a href=""> 정모 </a></li> -->
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <p>COMMUNITY</p>
        <nav>
            <ul class="nav_li2">
                <li><a href="">공동구매</a></li>
                <li><a href="">식물나눔</a></li>
                <li><a href="">친목정모</a></li>
            </ul>
        </nav>
        <form action="" method="POST">
            <div class="ip_tt"><input type="text" name="title" placeholder=" 제목"></div>
            <div class="tt_ct"><textarea name="ctnt" placeholder="내용" col="20" rows="40"></textarea></div>
            <div>
                <input type="submit" value="저장">
                <input type="reset" value="초기화">
            </div>
        </form>
    </main>
</body>
</html>