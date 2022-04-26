<?php

    include_once 'db/db_board.php';
    session_start();
    $login_user = $_SESSION["login_user"];  // 로긴프록에 로그인했을때, 해서 배열로 넣어줬기때문에 불러옴.
    
    $i_board = $_GET['i_board'];
    $param = [
        "i_board" => $i_board
        // "i_board" => $_GET['i_board'] 도 가능. 대신 위에  $i_board = $_GET['i_board']; 지워야 함.
    ];
    // 방법 1 (리턴값이 그냥 $result일 때만 가능.)
    // $result = sel_board($param);
    // while ($row=mysqli_fetch_assoc($result))
    // {
    //     $i_user = $row['i_user'];
    //     $title = $row['title'];
    //     $nm = $row['nm'];
    //     $created_at = $row['created_at'];
    //     $ctnt = $row['ctnt'];
    // }

    //2번(리턴값이 mysqli_fetch_assoc($result)일 때만 가능.)
    // $result = sel_board($param);
    // $i_user = $result['i_user'];
    // $title = $result['title'];
    // $nm = $result['nm'];
    // $created_at = $result['created_at'];
    // $ctnt = $result['ctnt'];
    
    // 3번 (리턴값이 mysqli_fetch_assoc($result)일 때만 가능.)
    $i_user = sel_board($param)['i_user'];
    $title = sel_board($param)['title'];
    $nm = sel_board($param)['nm'];
    $created_at = sel_board($param)['created_at'];
    $ctnt = sel_board($param)['ctnt'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <div><a href="list.php">리스트</a></div>
    <?php if($login_user["i_user"] === $i_user) { ?>
    <div>
        <a href="mod.php"><button>수정</button></a>
        <a href="del.php"><button>삭제</button></a>
    </div>
    <?php } ?>
    <div>제    목 : <?=$title?></div>
    <div>글 쓴 이 : <?=$nm?></div>
    <div>등록일시 : <?=$created_at?></div>
    <div>내   용 : <?=$ctnt?></div>
</body>
</html>