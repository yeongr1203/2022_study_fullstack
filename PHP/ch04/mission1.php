<?php

/*

    90점 이상 A (3점이하, '-', 7점이상 or 100점 '+')
   => 90 : A-, 95: A, 98: A+

    80점 이상 B (3점이하, '-', 7점이상 +')
    70점 이상 C (3점이하, '-', 7점이상 +')
    60점 이상 D (3점이하, '-', 7점이상 +')
    60점 미만 F (3점이하, '-', 7점이상 +')
    0~100점 점수가 아니면 "잘못된 값" 출력.

*/


$score = rand(0,120);
print "점수 : $score <br>";

if ( $score >= 90 )
{
    print "A";
} else if ( $score <= 80 )


// 앞자리 뒷자리 나눠서 분리해서 작업.
// $val_1 = 10으로 나눠서 10자리 숫자를 구해서 작업.
// $val_2 = 1자리 숫자를 구할때 사용함.



/* 선생님 풀이 - 이건 개발자들이 풀었을때, 고급방식.

$score = rand (0,120);
print "점수 : $score <br>";

if($score >100 || $score <0)
{
    print "잘못된 값";
} 
else {
        $sign = "F";
        $symbol = "";
        $val_1 = intval($score/10); //intval 대신 floor = 정수로 표현.
        switch($val_1)
        {
            case 10: case 9:
                $sign = "B";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "c";
                break;
            case 6:
                $sign = "D";
                break;
        }
        $val_2 = $score % 10; // 1의 자리
        if($score >= 60)
        {  
            if($score === 100 || $val_2 >= 7)
            {
                $symbol = "+";
            }
            else if($val_2 <= 3)
            {
                $symbol = "-";
            }
        }
     print $sign . $symbol;
}


잘못된 값 먼저 출력 후 점수체크.
10으로 나눠서 실수로 바꿔서 작엄하심.

*/


?>
