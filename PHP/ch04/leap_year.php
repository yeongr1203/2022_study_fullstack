<?php
    $year = 1200;

    //연도를 400으로 나눴을때, 나머지가 0이거나

    //연도를 4로 나눴을 때 나머지가 0이고,
    //100으로 나눴을 때 나머지가 0이 아니라면
    //윤년
    // 쌤이 풀이해준것.
    print "${year}년은";
    if($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0 ) ) {
        print "윤년입니다.";
    } // 소괄호로 안에 묶어준거와 400으로 나눈거로 비교할 수 있고, 소괄호로 묶어준게 먼저 실행이 되므로 비교할 수 있다.
    else
    {
        print "윤년이 아닙니다.";
    }
// 내가푼것.
    // if( $year%400 == 0 )
    // {
    //     print "윤년입니다.";
    // }
    // else if ( $year%4 == 0 && $year%100 != 0)
    // {
    //     print "윤년입니다.";
    // }


?>