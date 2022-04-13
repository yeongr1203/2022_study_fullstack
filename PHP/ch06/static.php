<?php

    function inc()
    {
        static $i = 1;          // 최초 한 번만 실행되기 떄문에 값이 쌓여서 숫자가 커지는 것.
                                // static을 빼면 10개 다 1일 찍힘. 최초 딱 한번만 사용(Once)!
        print $i."<br>";        // static은 여기만 해당되는 변수로, 다른 곳에 영향을 받지 않는다.
        $i += 1;
    }

    $z =1;                      // 이 변수는 다른데서도 영향을 받아 사용될 수 있지만 
    function inc2()
    {
        global $z;
        print $z ."<br>";
        $z +=1;
    }

    for($i=0; $i<10; $i++)
    {
        inc();
    }


    //static =정적
    //static을 빼면 넌스태틱, nunstatic 은 호출이 한번 끝나면 끝이라서 새로 다시 시작하기때문에 1로 찍힘.

?>
<!-- 

class 메모리얼
: static 붙은 애들이 할당되어 저장됨. == 자바 기준

static은 저장이 되는 공간이 따로 있음.





 -->