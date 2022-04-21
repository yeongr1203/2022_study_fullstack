<?php

    function naver_conn()
    {
        define("URL", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "506greendg@");
        define("DB_NAME", "naver");

        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }


?>