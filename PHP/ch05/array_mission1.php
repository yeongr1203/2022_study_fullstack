<?php

    /*
        합계:?
        평균:?

    */

// 아래는 단순 계산.
    // $score_arr = array(100, 90, 33, 87, 65);
    // $t = $score_arr[0] + $score_arr[1] +$score_arr[2] +$score_arr[3] +$score_arr[4]; 
    // $s = $t/5;
    // print "$t<br>";
    // print "$s";


$score_arr = array(100, 90, 33, 87, 65);
$sum = 0; // 합계의 값을 주기 위한 변수
for ($i=1; $i<=count($score_arr); $i++) // 반복문값이 array의 값의 숫자만큼이기 때문에 $i<=count($score_arr) 로 작성.
{
    $sum = $sum+$score_arr[$i]; // 합계의 변수는 합계값 + array의 모든값. $i로 반복문을 쓰기 때문에 $i로 작성.
}
$avg = $sum/count($score_arr); // avg는 평균을 뜻하는 단어로, 합계값/반복문숫자값 = 평균
print "합계 : $sum <br> 평균 : $avg";



/*

$score_arr = array(100, 90, 33, 87, 65);
    $sum = 0;
    
    for($i = 0; $i < count($score_arr); $i++)
    {
        $sum += $score_arr[$i];
    }

    $avg = $sum/count($score_arr);

    print "합계 : $sum<br> 평균 : $avg";



*/


?>
