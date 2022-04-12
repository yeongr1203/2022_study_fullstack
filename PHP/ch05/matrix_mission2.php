<?php
    /* 
    국어
    합계:?, 평균:?

    영어
    합계:?, 평균:?

    수학
    합계:?, 평균:?

    */

// 밖에 값 고정.
// 안에꺼 회전.



// 선생님 풀이.
$scores = array(
    //국, 영, 수
    array(100, 100, 100),   
    array(90, 80, 70),      
    array(55, 65, 75),      
    array(90, 88, 55),
);

$cls_names = array("국어", "영어", "수학"); // 0번방, 1번방, 2번방 (국/영/수)
$cls_sums = array();
for($i=0; $i<count($scores); $i++) // 0~3 (4번)
{        
    for($z=0; $z<count($scores[$i]); $z++) // 0~2 // 총3번돌기때문에(=  0,1,2 ) (3)
    {
        $cls_sums[$z] += $scores[$i][$z]; // 0+= $socres [0][0]
    }        
}
// for문이 끝나면 각 과목의 합계가 결정됨.

for($i=0; $i<count($cls_names); $i++)
{
    $sum = $cls_sums[$i];
    $avg = $sum / count($scores);
    print $cls_names[$i] . "<br>";
    print "합계 : $sum, 평균 : $avg <br>";
    print "<br>";
}
// 함수를 한번에 한 이유.

?>
