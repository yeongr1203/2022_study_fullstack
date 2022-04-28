<?php
    include_once 'db/db_user.php';

    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $confirm_upw = $_POST['confirm_upw'];
    $nm = $_POST['nm'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $addr = $_POST['addr'];
    $email = $_POST['email'];

    $nm = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender,
        "birth" => $birth,
        "phone" => $phone,
        "addr" => $addr,
        "email" => $email,
    ];
    $result = ins_proc($nn);
    print $uid."c<br>";
    print $upw."c<br>";
    print $confirm_upw."c<br>";
    print $nm."c<br>";
    print $gender."c<br>";
    print $birth."c<br>";
    print $phone."c<br>";
    print $addr."c<br>";
    print $email."c<br>";


    // if ($result) {
    //     header("location: login.php");        
    // }

?>