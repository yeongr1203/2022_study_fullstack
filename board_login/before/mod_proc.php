<?php
    include_once "db/db_board.php";
    session_start();
    $login_user = $_SESSION["login_user"];

    $i_board = $_POST["i_board"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $i_user = $login_user["i_user"];

    $param = [
        "i_user" => $i_user,
        "i_board" => $i_board,
        "title" => $title,
        "ctnt" => $ctnt,
    ];
    $result = upd_board($param);
    // print "result : ".$result;
    // header를 주석처리하고 프린트로 설정, 그리고 주소창에 수정 아이보드 값줘서 링크 이동
    // 해서 수정칸에 수정해서 수정 넘기면 넘어가진 않지만 값은 넘어가서 result:1로 뜬다. 
    if($result){
        header("location:detail.php?i_board=$i_board");
    }