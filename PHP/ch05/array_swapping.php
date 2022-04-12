<?php
    $arr = [10, 33, 12, 8, 1, 89];

    print_r($arr);
    print "<br>";

    $temp = $arr[0]; //0번자리의 값을 temp에 준다.
    $arr[0] = $arr[1]; //1번자리에 값을 0번으로 이동시킨다.
    $arr[1] = $temp; // 비어있는 1번자리에 temp값을 옮겨준다.

    // 순서가 서로 바뀜.

    print_r($arr); //결과값에 나타남.
    print "<br>";
?>