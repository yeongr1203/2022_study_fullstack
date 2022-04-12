<?php

$score = rand(0, 120);
    print "점수 : $score <br>";
    $grap = "";     //등급 담는 변수
    $pm = "";       //+/- 담을 변수
    //등급 구분 하는 if문
    if (90 <= $score && $score <= 100)
    {
        $grap = "A";
    }
    elseif (80 <= $score && $score < 90)
    {
        $grap = "B";
    }
    elseif (70 <= $score && $score < 80)
    {
        $grap = "C";
    }
    elseif (60 <= $score && $score < 70)
    {
        $grap = "D";
        
    }
    elseif ($score < 60)
    {
        $grap = "F";
    }
    else 
    {
        print "잘못된 값";
    }

    //+/- 구분 하는 if문
    if (($score % 10 <= 3) && $score > 60 && $score < 100)
    {
        $pm = "-";
    }
    elseif (($score % 10 >= 7) && $score > 60 && $score < 100 || $score == 100)
    {
        $pm = "+";
    }
    //최종 결과값 출력
    print $grap . $pm;

    //

    



?>
