<?php
    $num = 10;
    // 10은 짝수입니다.

    //  썜 풀이
    if($num % 2 === 0)
    {
        print "${num}는(은) 짝수입니다.";
    }
    else
    {
        print "${num}는(은) 홀수입니다.";
    }

    
    // 내가 푼것.
    if ( $num % 2 == 0 )
    {
        print $num."은 짝수입니다.";
    }
    else
    {
        print $num."은 홀수입니다.";
    }
?>