<?php

    /*
        지금까지 배운 것 모두 활용하여
        출력:[1,2,3,4,5,6,7]
    */

    echo "[";
    for ($i=1; $i<7; $i++)
    {
        echo $i.",";
    }
    echo $i;
    echo "]"; 

?>

<!-- 

선생님 풀이.

    //$end_val=0; 을 지정하면,
    $i<$end_val 으로 설정해서   $end_val이거 값만 바꾸면 하나하나씩 숫자로 넣지 않고
    변수값으로 바로 줘서 한곳만 설정하면 다 바꿀 수 있다.

    $end_val = 10;
    echo "[";
    for ($i=1; $i<$end_val; $i++)
    {
        print $i;
        if($i < $end_val -1 ) { print ","; }
    }
    echo "]";
    // 숫자 먼저 찍고 해결.

    echo "<br>";

    echo "[";
    for ($i=1; $i<$end_val; $i++)
    {
        print $i;
        if($i < $end_val -1 ) { print ","; }
    }
    echo "]";



-->



