<?php
       session_start();
    $nm ="";
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user['nm'];
    }
    // 값을 포스트 겟 방식으로 다들 보내는데, 보내진 값들을 배열로 받아서 변수로 저장해주고, 그 저장된 배열에 값을 불러서 사용함.
    // isset() 함수 = 해당변수가 등록되어 있는지 확인을 할 수 있다.
    // isset($_SESSION['변수명']) 형태 = 만약 해당변수가 등록이 되어 있다면 true, 아니면 fasle.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <!-- href 여기 경로는 다운로드가 되는 주소값을 작성해줘야함. -->
    <!-- href="/common.css" 앞에 / 붙이면 localhost/common.css 가 경로가 됨. 앞에 폴더는 싹다 사라지고 폴더 안이 아니라 밖에 있을때를 뜻함. 위치상으로index.html이 있는 곳에 있어야함. -->
    <!-- 경로에서 board_login은 1차 주소값. -->
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
        <?=isset($_SESSION["login_user"]) ? "<div>" . $nm . "님 환영합니다.</div>" : "" ?>
        <div>
            <a href="list.php">리스트</a>
            <a href="write.php">글쓰기</a>
            <?=
                isset($_SESSION["login_user"]) 
                ? "<a href='logout.php'>로그아웃</a>" 
                : "<a href='login.php'>로그인</a>" 
            ?>

        </div>        
        </header>
        <main>
            <h1>리스트</h1>
        </main>
    </div>
</body>
</html>