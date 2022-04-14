<?php

    print  __FILE__ ."<br>";
    print  __LINE__ ."<br>";
    print  __LINE__ ."<br>";
    print "PHP VERSION : ". PHP_VERSION . "<br>";
    print "OS : " .PHP_OS. "<br>";                      // 실행된 PC의 OS 확인 가능.
    
    $GLOBALS["foo"] = 10;
    $GLOBALS["foo"] = 11;

    print "-- 글로벌상수 -- <br>";
    foreach($GLOBALS as $key => $var)
    {
        print $key . " : ";
        print_r ($var);
        print "<br>";
    }

    $arr = array (
        "name" => "홍길동",
        "age" => 20,
        ""

    );

    // while(list($key, $var) = each ($GLOBALS))
    // {
    //     print $key. " : ";
    //     print_r($var);
    //     print "<br>";
    // } == 이건 8버전 부터 사라짐.

    //$GLOBALS = 슈퍼글로벌 중 하나.
    // $GLOBALS  = 글로벌 상수. 

?>