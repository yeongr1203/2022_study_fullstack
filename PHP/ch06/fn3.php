<?php

    $start_num = 1;
    $end_num = 100;

    $result = sum_from_to($start_num, $end_num);

    print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result <br>";

    // 내가푼것.
    function sum_from_to($start_num, $end_num)
    {
        $result = 0;
        for ( $i=0; $i <= 100; $i++)
        {
            $result = $i + $result; 
        }
        return $result;
    } // 숫자 값에 기존 준 함수값을 넣어 주기. 그럼 선생님 풀이와 비슷.

    //선생님 풀이.
    
    function sum_from_to($start_num, $end_num);
    {
        $result = 0;
        for ($i=$start_num; $i<=$end_num; $i++)
        {
            $result += $i;
        }
        return $result;
    }







?>