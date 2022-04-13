<?php

    //전역변수
    
    function make_ten()
    {
        global $i;              // 전역변수를 쓴다면 이렇게 선언할 수 있음.
        $i = $i +10;            // 지역변수
                               // 함수안에서 변수 할당하면, 호출했을 때 잠깐 만들어지 는 것.
                               // 호출이 되서 안에서 만들어지고 사용이 끝나면 없는 것. 
        // global $i;           // 이건 전역변수 값을 사용하고 싶을 때, 사용한 식.
        // $i = 10;             // global 변수; 변수 = 변수값; 

    }

    $i=0;                       // 전역변수
                                // 전역변수가 함수안에 영향을 미치고 싶다면 global 변수 -- 이렇게 선언 후
                                // 밑에 값을 넣어주면 사용이 가능함. 
    make_ten();
    print "i : $i <br>";



// 함수안에 선언된 변수 = 지역변수
// 함수 밖에 선언된 변수 = 전역변수
// 지역변수와 전역변수는 서로 다른 변수. 저장되는 위치도 다름.
// 지역변수는 이렇게 만들어 준 변수 라는 뜻으로 밖에 있는 변수가 아님.
// 전역변수는 안에 불러와서 사용하고 싶으면 다른 키워드를 줘서 불러와서 사용이 가능함.

?>