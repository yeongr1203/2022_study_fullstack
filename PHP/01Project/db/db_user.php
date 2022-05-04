<?php
    
    include_once "db/db.php";

    // join
    function ins_user(&$ji) {
        $uid = $ji["uid"];
        $upw = $ji["upw"];
        $nm = $ji["nm"];
        $unick = $ji["unick"];
        $gender = $ji["gender"];
        $yy = $ji["yy"];
        $mm = $ji["mm"];
        $dd = $ji["dd"];
        $uphone = $ji["uphone"];
        $addr = $ji["addr"];
        $email = $ji["email"];


    $conn = get_conn();
    $sql =
    "   INSERT INTO t_user 
        ( uid, upw, nm, unick, gender, yy, mm, dd, uphone, addr, email )
        VALUES
        ('$uid','$upw','$nm','$unick', '$gender','$yy','$mm','$dd', '$uphone', '$addr','$email')
    ";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
    }

    // login
    function sel_user(&$ji) {
        $uid = $ji["uid"];
        $sql =
        "   SELECT uid, upw, nm, unick, gender, yy, mm, dd, uphone, addr, email
            FROM t_user
            WHERE uid = '$uid' 
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

