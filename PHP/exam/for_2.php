<?php

    // for문을 활용해서 1~100사이의 짝수의 합과 홀수의 합을 각각 구해보자.


    $a = 0;
    $b = 0;
    for($i=1; $i<=100; $i++)
    {
        if( $i%2 == 0 ) 
        $a = $a + $i;
        if( $i%2 == 1 ) 
        $b = $b + $i;
    }
    print $a;
    print "<br>";
    print $b;
    
   

?>