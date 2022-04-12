<?php
    $arr_age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "John" => 24,
    );

    //값 정렬
    //sort(오름차순), rsort(내림차순)

    $copy_arr_1 = $arr_age; // 똑같은 $arr_age랑 같은 것을 복사해서 나타낸다. 카피이기 때문에 $arr_age가 아니라 $coy_arr_1 이다.
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";

    rsort($copy_arr_1);

    print "origin : ";
    print_r($arr_age);
    print "<br>";

    print_r($copy_arr_1);
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>---------------<br>";

    //키 정렬
    //ksort(오름차순), krsort(내림차순)
    // 값과 키가 같이 나오는데, 키 정렬은 키가 기준이라 반드시 나타나야함.

    $copy_arr_2 = $arr_age;
    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

    krsort($copy_arr_2);

    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

    

?>


<!-- 

SORT는 PHP에서 제공하는 것이다.
SORT & RSORT 는 값을 기준으로 정렬한다.

 -->