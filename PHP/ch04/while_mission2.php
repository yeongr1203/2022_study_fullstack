<?php

    /* 
        rand를 실행시킬건데 10이 나올때 까지 반복한다.
        10이 아니면 숫자를 찍는다.
        10이 나오면 반복을 멈추고 "끝" 출력.
    
    */
    print "-- 시작 -- <br>" ; 
    $r_val = rand(1,10);
    print "r_val : $r_val<br>";

    while ($r_val !== 10)
    {
        print "r_val : ". $r_val ."<br>";
        $r_val = rand(1,10);
    }
    print "-- 끝 --";

//선생님 풀이도 동일


?>