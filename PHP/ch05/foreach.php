<?php
    $array = array(100, 200, 300, 400, 500);

    foreach($array as $val) // foreach()에 array하는 배열의 주소값을 넣어주고 as 변수할당을 해주면 $val에 제일 첫 값을 넣어줌.
    {
        print $val . "<br>"; // 자동으로 다음값을 계속 순차적으로 $val에 넣어준다.
    }
    print "---------------- <br>";


    foreach($array as $key => $val) // $key값은 인덱스. $val 은 array의 배열. // $key, $val 변수명은 아무거나 상관 없다. 위치만 잘 작성해주면!
    {
        print $key .  " : " . $val . "<br>";
    }
    print "---------------- <br>";
?>