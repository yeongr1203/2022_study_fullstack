<?php

    function get_conn(){
        define("URL", "localhost"); // 원격은 IP주소
        define("USERNAME", "root"); //root는 연습이라 root라 작성됨. 얘가 최고 조심. 뚫리면 큰일.
        // 하이디sql의 사용자 이름이 root라서 이렇게 작성됨
        define("PASSWORD", "506greendg@");  // 패쓰워드
        define("DB_NAME", "board1");        // 데이터베이스 명.
        // define("PORT", "3306");
        // 포트번호가 바꼈으면 그것도 작성해주기.(추가되는것임.)

        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME );
        // return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, PORT);
        // 일부러 직접 값을 주지 않음. 가독성이 떨어지기 때문에 보통 개발자들은 쉽게 파악하기위해서 직접 값을 주지 않음.
        // function get_conn()
        // {
        //     return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME );
        // }
    
    }

?>
<!-- 

    mysqli_connect // stream과 같다. = php와 mysql, mariadb 를 연결시켜주는 것.
    첫번째 주소, ID, PW, DB이름, 포트번호(있으면);
    직접 값을 주게 되면, 모튼 사용된 모든 곳에 다 값을 일일이 다 수정해야함.
    그래서 하나의 내용이 변경이 되어도 불러온 곳 하나만 수정해서 전체 수정되도록 편하게 작성하는 것이 중요함.

    프로그램 작동 중간에 값이 바뀌면 안되는 것들 = 상수로 지정.
    보안이랑은 상관이 없음.
    이 값은 변하면 안된다 하는 것들을 상수로 지정.
    변수보다는 상수가 속도가 더 빠름.




 -->