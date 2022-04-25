<?php
    include_once "db/db_user.php";
    //login.php에서 넘어오는 값을 적절한 변수에 담는다.
    // 변수의 값을 출력.
    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    $param = [
        "uid" => $uid
    ];
    $result = sel_user($param);
    // if(empty($result)) {
    //     echo "해당하는 아이디 없음";
    //     exit; // 또는 die;
    // }
    // echo "i_user : " , $result["i_user"], "<br>";
    // echo "pw : " , $result["upw"], "<br>";   

    // (만약에)비밀번호가 맞으면 "list.php"로 주소 이동
    // 비밀번호가 다르면 "login.php"로 주소 이동
    // (만약에)가 숨어져있음. ~면 이면 if문, 그리고 조건식이 필요함.
    
    if ( $result["upw"] === $upw || empty($result)) {    // 로그인 성공!!
        session_start();
        $_SESSION["login_user"] = $result;  
        header("location: list.php");
   }else {
         header("location: login.php");
    }
    ?>