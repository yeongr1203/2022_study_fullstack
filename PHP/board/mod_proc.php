<?php

    // 수정완료 후 detail.php로 이동.

    include_once 'db.php';

    $i_board = $_POST['i_board']; 
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $mod_at = $_POST['mod_at'];

    $sql = 
    " 
        UPDATE t_board 
        SET title = '$title' 
        , ctnt = '$ctnt' 
        , mod_at = now()
        WHERE i_board = $i_board 
    ";        //  시간 나타낼때 where문 앞에 넣기
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: detail.php?i_board=${i_board}");


?>

<!-- 
작성시간도 수정하고 싶을때,
    alter table t_board add mod_at datetime default now();
 -->
