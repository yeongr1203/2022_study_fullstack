<?php

    // array안에 또  array 를 넣을 수 있음.
    $matrix = array ( // 첫번쨰 array자식은 3개(행 수)
        array(1 , 2, 3, 0), // 안에서 첫번째 array 자식은 3개(1,2,3)
        array(4 , 5, 6, 0, 1),
        array(7 , 8, 9, 0),
    );

    print_r($matrix);
    print "<br><br>";

    print $matrix[1][1]."<br>";
    /* 
        첫번째 [1]은 $matrix=array 안에 있는 행번호. 두번째 [1]은 4,5,6 가 있는  array를 뜻하고 거기서 1번에 있는 값.
    */
    $child1 = $matrix[1]; 
    // 큰array의 1번 자식(=$child1)의 1번자식 
    print $child1[1]."<br>"; // 13번과,17번과 같은 답.

    array_push($child1, 10, 10);

    print $child1[1]."<br>";

    print "matrix count:".count($matrix)."<br>";
    print "matrix count:".count($matrix[0])."<br>";
    print "matrix count:".count($matrix[1])."<br>";
    print "matrix count:".count($matrix[2])."<br>";

    print "<br><br>";
    print_r($child1);
    print "<br><br>";
    print_r($matrix[1]);

?>
<!-- 

깊은복사 





 -->