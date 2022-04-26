<?php
    session_start();
    $nm ="";    // 중괄호 안에 있으면 그 안에서만 살아있음. 하지만 php는 살아있지만 적는걸 습관화하기 위해 작성하기!
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user['nm'];
    }
    // 값을 포스트 겟 방식으로 다들 보내는데, 보내진 값들을 배열로 받아서 변수로 저장해주고, 그 저장된 배열에 값을 불러서 사용함.
    // isset() 함수 = 해당변수가 등록되어 있는지 확인을 할 수 있다.
    // isset($_SESSION['변수명']) 형태 = 만약 해당변수가 등록이 되어 있다면 true, 아니면 fasle.
    
    // 리스트 구현.
    include_once 'db/db_board.php';
    $list = sel_board_list();

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
            <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="write.php">글쓰기</a>
                    <a href='logout.php'>로그아웃</a>
            <?php } else { ?>
                   <a href='login.php'>로그인</a>
            <?php } ?>
        </div>        
        </header>
        <main>
            <h1>리스트</h1>
            <!-- 글번호, 제목, 작성자명, 등록일시 (테이블) -->
            <table>
                <thead>
                    <tr>
                        <th>번    호</th>
                        <th>제    목</th>
                        <th>작 성 자</th>
                        <th>등록일시</th>
                    </tr>
                </thead> <!-- thead , tbody 꼭 안해도 됨. 빼도 됨. -->
                <tbody>
                         <tr>
                            <td><?=$list["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$list["i_board"]?>"><?=$list["title"]?></a></td>
                            <td><?=$list["nm"]?></td>
                            <td><?=$list["created_at"]?></td>
                         </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
<!-- 
    로그인 해서 로그아웃이 생기게 했을때, 작업은 
            <header>
            php : isset($_SESSION["login_user"]) ? "<div>" . $nm . "님 환영합니다.</div>" : "" ?>
        <div>
            <a href="list.php">리스트</a>
            <a href="write.php">글쓰기</a>
            php:
                isset($_SESSION["login_user"]) 
                ? "<a href='logout.php'>로그아웃</a>" 
                : "<a href='login.php'>로그인</a>" 
            ?>

        </div>        
        </header>

// 아래 이건 수정본 이유
조건이 1개일때는 3항식이 나음.
2개이상일때는, if문 안에 써주기

// 아래 내가 한 것.

    include_once 'db/db_board.php';
    $result = sel_board_list($param);   // 함수호출
    while($row = mysqli_fetch_assoc($result)){ // 함수사용
        $i_board = $row['i_board'];
        $title = $row['title'];
        $uid = $row['uid'];
        $created_at = $row['created_at'];
        print "<tr>"; 
        print "<td>${i_board}</td>";
        print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
        print "<td>${uid}</td>";
        print "<td>${created_at}</td>";
        print "</tr>";
        }


 -->