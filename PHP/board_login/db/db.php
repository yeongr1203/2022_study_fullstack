<?php
// db, db_user, db_board 는 db에 필요한 것. 앞전에 했던 list안에 쓴 것들을 분산시켜서 정리하겠다.
// 커넥션 의미!

define("URL", "localhost");
define("USERNAME", "root");
define("PASSWORD", "506greendg@");
define("DB_NAME", "board_login");
define("PORT", "3306");

function get_conn()
{
    return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, PORT);
}
// get_conn() 이라는 함수는 mysqli_connect 라는 php제공함수를 사용했다.
// return mysqli_connect 여기는 보면 또 리턴, 이건 get_conn() 단계를 만들어줌.

?>

<!-- 











 -->