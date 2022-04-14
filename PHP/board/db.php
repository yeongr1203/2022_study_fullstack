<?php

    function get_conn(){
        define("URL", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "506greendg@");
        define("DB_NAME", "board1");
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }

?>
<!-- 

    mysqli_connect // stream과 같다. = php와 mysql, mariadb 를 연결시켜주는 것.
    첫번째 주소, ID, PW, DB이름, 포트번호(있으면);

 -->