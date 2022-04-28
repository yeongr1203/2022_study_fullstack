<?php

    include_once "db/db_user.php";
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    
    $nn = [
        "uid" => $uid
    ];
   
    $result = sel_user($nn);
    if ($result['upw'] === $upw) {
        session_start();
        $_SESSION['login_user']=$result;
        header("location: login.php");
    } else {
        header("<script>loaction.href='http://www.naver.com'</script>");
    }
