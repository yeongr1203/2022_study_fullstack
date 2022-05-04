<?php
    
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confirm_upw = $_POST["confirm_upw"];
    $nm = $_POST["nm"];
    $unick = $_POST["unick"];
    $gender = $_POST["gender"];
    $yy = $_POST["yy"];
    $mm = $_POST["mm"];
    $dd = $_POST["dd"];
    $uphone = $_POST["uphone"];
    $addr = $_POST["addr"];
    $email = $_POST["email"];


    $ji = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "unick" => $unick,
        "gender" => $gender,
        "yy" => $yy,
        "mm" => $mm,
        "dd" => $dd,
        "uphone" => $uphone,
        "addr" => $addr,
        "email" => $email
    ];

    $result = ins_user($ji);

    if ($result) {
        header("location: login.php");        
    }