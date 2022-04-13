<?php

    // 1에서 100까지의 합을 구하시오.

    $start_num = 1;
    $end_num = 100;

    $result = sum_from_to($start_num, $end_num);                        // 리턴한 값을 복사하여 주기때문에 function안에 리턴이 들어가야함.

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
    
    function sum_from_to($start_num, $end_num);     // function 함수명(파라미터1,파라미터2)
    {
        $result = 0;                                // 합의 값을 넣을 변수값 생성.
        for ($i=$start_num; $i<=$end_num; $i++)     // for($i=초깃갑($start_num(시작값)); $i++(값을 하나씩 올림) )
        {                                           // 0+1이면 1, 돌아가면 1에 +1을 해서 2, 2+1 , 3+3 ... =5050이 나오면, 다시 호출한 값$result에 주고, 프린트.
            $result += $i;                          // $result(합의 변수)에 $i의 값을 더함.
        }
        return $result;                             // return으로 합의 변수 내용을 불러옴.
    }                                               // $result값 출력.


    // return해서 값을 준 다음에 사용을 할 때, return을 사용해야함.




?>
<!-- 
        // 정리부터하고 사용. 작업한다면 이런 구성.

    function sum_from_to($start_num, $end_num);     // function 함수명(파라미터1,파라미터2)
    {
        $result = 0;                                // 합의 값을 넣을 변수값 생성.
        for ($i=$start_num; $i<=$end_num; $i++)     // for($i=초깃갑($start_num(시작값)); $i++(값을 하나씩 올림) )
        {                                           // 0+1이면 1, 돌아가면 1에 +1을 해서 2, 2+1 , 3+3 ... =5050이 나오면, 다시 호출한 값$result에 주고, 프린트.
            $result += $i;                          // $result(합의 변수)에 $i의 값을 더함.
        }
        return $result;                             // return으로 합의 변수 내용을 불러옴.
    }                                               // $result값 출력.

    $start_num = 1;
    $end_num = 100;

    $result = sum_from_to($start_num, $end_num);                        // 리턴한 값을 복사하여 주기때문에 function안에 리턴이 들어가야함.

    print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result <br>";

 -->