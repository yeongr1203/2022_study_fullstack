<?php

    $numbers = array (10,20,5=>30,40); // 2번, 3번 4번을 건너 뛰고 5번이부터 인덱스가 나타남. 5=>30으로 5번인덱스 = 30이기 때문에. 

    print_r($numbers);
    print "<br>";
    print "count : ".cont($numbers);

    $numbers[2] = 30; // 2번 인덱스를 30으로 바꿔버림. //["2"]이렇게 쓰는 것과 같음.

    for($i=0; $i<count($numbers); $i++)
    {
        print $numbers[$i]."<br>";
    }
    print "--- 끝 ---";

    foreach($numbers as $key => $val)
    {
        print $key. " : ". $val . "<br>";
    }

// 인덱스 배열은 전체적으로 숫자만 쓰는게 아니라 문자로 들어가진다고 생각하기.
// 자바에서는 lap이라고 함.









?>