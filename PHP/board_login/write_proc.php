<?php
   include_once 'db/db_board.php';
   
    session_start();
    $login_user = $_SESSION['login_user'];
    $i_user = $login_user['i_user'];

    // t_board에 insert 완료후 list.php로 이동.
    $i_user = $login_user["i_user"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $param = [
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt,
    ];

    $result = ins_board($param);

    header("location: list.php");
