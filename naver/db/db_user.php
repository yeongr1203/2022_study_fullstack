<?php

include_once "db/db.php";

// join
function ins_proc($nn) {
    $uid = $nn['uid'];
    $upw = $nn['upw'];
    $nm = $nn['nm'];
    $gender = $nn['gender'];
    $birth = $nn['birth'];
    $phone = $nn['phone'];
    $addr = $nn['addr'];
    $email = $nn['email'];

    $conn = naver_conn();
    $sql = 
    "   INSERT INTO t_user
        (uid, upw, nm, gender, birth, phone, addr, email)
        VALUES
        ('$uid','$upw','$nm','$gender','$birth','$phone','$addr','$email')
    ";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// login
function sel_user($nn) {
    $uid = $nn['uid'];
    $sql = 
    "   SELECT uid, upw, nm, gender, birth, phone, email
        FROM t_user
        WHERE uid = '$uid'
    ";
    $conn = naver_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}
