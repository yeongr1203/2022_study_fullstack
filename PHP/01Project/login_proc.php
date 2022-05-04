<?php

    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST['upw'];

    $ji = [
        "uid" => $uid
    ];

    $result = sel_user($ji);

    if ($result['upw'] === $upw) {
        session_start();
        $_SESSION['login_user']=$result;
        header("location: main.php");
    } else {
        header("lacation:login.php");
    }