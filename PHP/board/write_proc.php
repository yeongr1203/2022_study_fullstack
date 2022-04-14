<?php
    include "db.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title <br>";
    print "ctnt : $ctnt <br>";

    $conn = get_conn(); //필요한 데이터베이스
    $sql = 
    " 
        INSERT INTO t_board 
        (title, ctnt)
        VALUES                     
        ('${title}', '${ctnt}')     
    ";                           //값 내용.값을 받겠다. 어떤건지 모르지만 문자열로 받겠다.
    mysqli_query($conn, $sql);  // 실행
    mysqli_close($conn); //연결 닫는거 !!! 엄청중요함.
    // header("Location: list.php"); // 주소값이동. // list앞에 슬러시 넣지 않으면 주소값 마지막 주소값만 바뀜. // 슬러시 빠지만 앞에 다 적어줘야함. // 끝주소값만 바뀌는 파일이면 슬러시 빼도 됨.
    die();
?>
<!-- 
    프로세스 인서트를 한다. 
 -->