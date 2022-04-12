<?php

    /*
        합계:?
        평균:?

    */

    // $score_arr = array(100, 90, 33, 87, 65);
    // $t = $score_arr[0] + $score_arr[1] +$score_arr[2] +$score_arr[3] +$score_arr[4]; 
    // $s = $t/5;
    // print "$t<br>";
    // print "$s";


    $score_arr = array(100, 90, 33, 87, 65);
    $len = count($score_arr);
    $sum = 0;
    for( $i=0; $i < $len; $i++ )
    {
        $sum = $sum + $score_arr[$i];
    }
    $svg = $sum/$len;
    print "합계 : $sum <br>";
    print "평균 : $svg <br>";



/*

$score_arr = array(100, 90, 33, 87, 65);
    $sum = 0;
    //$sum = null; 예전에는 null을 썼지만 요즘 트렌드는 null을 쓰지 않고,
    //       0; 꼭 값을 넣어줘야하는 습관을 들이기. null대신 0;으로 사용했음.
    
    for($i = 0; $i < count($score_arr); $i++)
    {
        $sum += $score_arr[$i];
    }

    $avg = $sum/count($score_arr);

    print "합계 : $sum<br> 평균 : $avg";



*/


?>
