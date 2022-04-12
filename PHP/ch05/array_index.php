<?php

    $numbers = array (10,20,5=>30,40);

    print_r($numbers);
    print "<br>";
    print "count : ".cont($numbers);

    for($i=0; $i<count($numbers); $i++)
    {
        print $numbers[$i]."<br>";
    }
    print "--- 끝 ---";

// 인덱스 배열은 보통 숫자.
// 자바에서는 lap이라고 함.









?>