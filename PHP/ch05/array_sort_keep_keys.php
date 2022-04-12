<?php
    $arr_age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "John" => 24,
    );

    //키 정렬값(키값 유지)
    // asort(오름차순), arsort(내림차순)

    arsort($arr_age);

    print ($arr_age);
?>


<!-- 

SORT는 PHP에서 제공하는 것이다.
SORT & RSORT 는 값을 기준으로 정렬한다.

key값이 없을땐 sort를 사용하는 것이 좋다. 더 빠르기 때문에.
key값이 유지가 되어야 한다면 

 -->