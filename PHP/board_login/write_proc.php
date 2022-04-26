<?php
   include_once 'db/db_board.php';
    // t_board에 insert 완료후 list.php로 이동.

    session_start();
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];

    $login_user = $_SESSION['login_user'];
    $i_user = $login_user['i_user'];

    $param = [
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt,
    ];
    $result = ins_board($param);
    if($result) {
        header("location: list.php");
    }


?>
<!-- 내가 작성한 것.

   include_once 'db/db_board.php';
   
    session_start();
    $login_user = $_SESSION['login_user'];
    $i_user = $login_user['i_user'];

    // t_board에 insert 완료후 list.php로 이동.
    $param = [
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt,
    ];

    $i_user = $login_user["i_user"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $result = ins_board($param);

    header("location: list.php")
    
-->
