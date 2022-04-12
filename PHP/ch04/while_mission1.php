<?php

    /* 
        1부터 val변수에 있는 숫자까지 모두 더해주세요.
        그리고 결과 값을 출력해주세요.
        while문으로 해결.
    
    
    
    */
    $val = rand(50,100);  
    print "val : $val <br>";
    $sum = 0;
    while ($i < $val )
    {
        $i++;
        $sum = $sum + $i;
    }
    print  $sum."<br>";
    print "--------------<br>";

    $val = rand(50,100);
    print "val : $val <br>";
    $sum2 = 0;
    for ($i=1; $i<=$val; $i++)
    {
        $sum2 = $sum2 + $i;
    }
    print $sum2;


    // 선생님 풀이

    // $val = rand(50,100);  
    // print "val : $val <br>";
    
    // $sum = 0;
    // $i=1;
    // while ($i <= $val )
    // {
    //     $sum += $i++;
    // }
    // print "sum : $sum <br>";


?>