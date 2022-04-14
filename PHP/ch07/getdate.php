<?php

    $seoul = getdate();

    print " 현재시간 : ".
            $seoul["year"] . "년" . 
            $seoul["mon"] . "월" .
            $seoul["mday"] . "일" .
            $seoul["hours"] . "시" .
            $seoul["minutes"] . "분" .
            $seoul["seconds"] ."초";

    // 이건 내가 설정된 php시간이 나타남.
    print "<br>-----------<br>";

    $year = gmdate("Y");
    $mon = gmdate("m");
    $day = gmdate("d");
    $hour = gmdate("H");
    $min = gmdate("i");
    $sec = gmdate("s");

    print "현재시간 ${year}년 ${mon}월 ${$day}일 ${hour}:${min}:${sec} <br>";
    // 세계표준시간이 나타남. = 그리니치 표준시

    print mt_rand(1,20); // 0.000






?>