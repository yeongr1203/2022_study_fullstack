<?php

// 영수, 순자, 영철, 옥순의 점수 총합 및 평균 값 구하기.
$scores = array(
    //국,영,수
    array(100, 100, 100 ),  //영수
    array(90, 80, 70 ),     //순자
    array(55, 65, 75 ),     //영철
    array(90, 88, 55),      //옥순
);

$name = array("영수","순자","영철","옥순");
$sum = array(0,0,0);
$avg = array(0,0,0);

for ($i=0; $i<count($scores); $i++)
{
    for($z=0; $z<count($scores); $z++)
    {
        $sum[$i] += $scores[$i][$z];
    }
}

for ($i=0; $i<count($name); $i++)
{
    print $name[$i]. " : " . $sum[$i] ."<br>" ;
}

print "<br>";

for ($i=0; $i<count($sum); $i++)
{
    $avg[$i] = $sum[$i] / count($avg);
    print $name[$i] . " : " . $avg[$i] . "<br>";
}

print "<br>";
// 과목별 총합 및 평균값 구하기.

$nm = array("국어","영어","수학");
$nm_sum = (0,0,0);
$nm_avg = (0,0,0);
for ( $i=0; $i < count($scores); $i++)
{
    for ( $i=0; $i<count($scores); $i++)
    {
        $nm_sum[$i] += 
    }
}


// 영수, 순자, 영철의 점수 총합 및 평균 값 구하기.
// $scores = array(
//     //국,영,수
//     array(100, 100, 100 ),  //영수
//     array(90, 80, 70 ),     //순자
//     array(55, 65, 75 ),     //영철
// );






// $name = array ("영수","순자","영철"); // 각자의 점수 합.
// $sum = array (0,0,0); // 점수합

// for ($i=0; $i<count($scores); $i++)
// {
//     for($s=0; $s<count($scores); $s++)
//     {
//         $sum[$i]+=$scores[$i][$s];
//     }
// }

// for ($i=0; $i<count($name); $i++)
// {
//     print $name[$i]. " : ". $sum[$i] . "<br>";
// }
// 총합까지만 출력.

// $name = array ( "영수", "순자", "영철");
// $sum = array (0, 0, 0);
// $avg = array (0,0,0);

// for ($i=0; $i<count($scores); $i++)
// {
//     for($z=0; $z<count($scores); $z++)
//     {
//         $sum[$i] += $scores[$i][$z];
//     }
// }

// for ($i=0; $i<count($name); $i++)
// {
//     print $name[$i]." : ". $sum[$i]."<br>";
// }


// for($i=0; $i<count($sum); $i++)
// {
//     $avg[$i] = $sum[$i]/count($avg);
//     print $name[$i] ." : " . $avg[$i] . "<br>";
// }
// 총햡 및 평균까지 출력.




?>
<!-- 

선생님 풀이
$names = array ("영수","순자","영철"); //score &name 모두 인덱스 맞춤.
$each_scores = array (0,0,0); // 영수점수, 순자점수, 영철점수 , 인덱스 맞췄음.

for ($i=0; $i < count($scores); $i++) // 줄선택 - 컬럼 - 컬럼
{  
    for($z=0; $z<count($scores[$i]); $z++) // i가 뭐냐에 따라 바뀌고, 
    {
        $each_scores[$i] += $scores[$i][$z];
    }
}

for($i=0; $i<count($names); $i++)
{
    print $names[$i]." : ".$each_scores[$i]."<br>";
}

 -->