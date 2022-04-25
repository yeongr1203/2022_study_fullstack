<?php

include_once "db.php";

// 회원가입창
function ins_user($param) {
    $uid = $param["uid"];
    $upw = $param["upw"];
    $nm = $param["nm"];
    $gender = $param["gender"];

    $conn = get_conn(); 
    // 아 얘도 리턴하는구나, 리턴한 값을 주는구나 라고 생각하면 됨.
    $sql = 
    "INSERT INTO t_user 
    (uid, upw, nm, gender)
    VALUES
    ('$uid', '$upw','$nm', '$gender')   
    ";
    // 이것은 안의 쿼리를 실행시켜주는 것. 

    $result = mysqli_query($conn, $sql);
    // 셀렉션일때랑 아닐 때랑 나뉨. = S 또는 !s // !s = 빈칸은 실패, 1을 성공. 성공했다 안했다만 알 수 있음.
    // S셀렉트일때는 결과값이 넘어옴.
    
    mysqli_close($conn);
    return $result;
}

// 로그인_proc 구현.
function sel_user($param){
    $uid = $param['uid'];
    $sql = 
    "   SELECT i_user, uid, upw, nm, gender
        FROM t_user
        WHERE uid = '$uid'
    ";
    // 아이디만 적은 이유는 패스워드 값도 같이 작성시, 둘중뭐가 틀린지 모른다. 
    // 그래서 아이디값 먼저 사용.
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}