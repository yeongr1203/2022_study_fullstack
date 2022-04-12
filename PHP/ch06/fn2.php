<?php

    // 숫자 10(는)은 짝수입니다.
    // 숫자 1(는)은 홀수입니다.

    $sum = rand(1,10);

    print_odd_even($sum);



    function prind_odd_even($n)
    {
        print $num;
        $result = %n % 2 === 0? "짝" : "홀" ;
        print "숫자 ${n}(는)은 ${result}수입니다.";
    }



// function 밖에 있는 함수를 사용할 수 없다.
// function에 있는 함수명이랑 같이 써도 무방하다. 
// 이유는 밖의 함수를 쓸 수 없기 때문에 같아도 되지만 엄연히 다른 함수이기 때문이다.

















?>