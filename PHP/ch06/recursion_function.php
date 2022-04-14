<?php

    // 재귀함수.
    // 내가 함수라면 내가 나를 호출하는 것.
    //팩토리얼 만들 때 주로 사용.
    // 팩토리얼 먼저 만들어보자.
    // $result = factorial(5);         //  5 x 4 x 3 x 2 x 1  // () 안에 있는 숫자만큼 곱함.
    // 괄호안에 숫자까지가 아니라 숫자만큼.
    
    $num = 5; 
    $result = factorial($num);
    print " ${num}! = $result <br>";

    // function factorial($num)
    // {
    //     $result = 1;
    //     for($i=2; $i<=$num; $i++)
    //     {
    //         $result *= $i;
    //     }
    //     return $result;
    // }



    //선생님풀이
    // 하나씩 올라가면서 곱하기 
    // 결과 값 : 5! = 120

    function factorial($num)
    {
        $result = 1;
        for($i=2; $i<=$num; $i++)
        {
            $result *= $i;
        }
        return $result;
    }
    print "----- <br>";

    $num = 6; 
    $result = factorial2($num);
    print " ${num}! = $result <br>";

    // 하나씩 내려가면서 곱하기 
    // 결과 값 : 6! = 720
    function factorial2($num)
    {
        $result = 1;
        for($i=$num; $i>0; $i--)
        {
            $result *= $i;
        }
        return $result;
    }
    print "----- <br>";


    // // 재귀함수 풀이
    // // 재귀함수가 간략하지만 퍼포먼스는 좋지 않음.
    function factorial_rec($num)
    {
        if($num < 0 ) {return 0;}
        if($num === 1) {return 1;}                  // 재귀함수는 끝이 있어야 함. 안그럼  무한루트라서, 이 부분은 필수로 넣어줌 = 끝을 만들어 준 것이다.
        return $num * factorial_rec($num-1);       // 만약 음수값을 넣는다면 1을만날 수 없기 때문에 무한 루트가 돌 수 있다.
    }
    $num = 6; 
    $result = factorial_rec($num);
    print " ${num}! = $result <br>";
    // 일단 factorial_rec($num) 이 함수를 시작을 해야한다. 6을 가지고 함수에 들어가면  1과 같지 않기 때문에 return에 있는 식대로 진행되고 다시 위로 올라가서 진행, 1과 같아지면 비로소 빠져나옴.

    // //절대값만들기
    function my_abs($val)
    {
        // 선생님 풀이
        // if($val < 0) {return -$val;}
        // return $val;
        return $val < 0 ? -$val : $val;
    }
    $num 3;
    $result = my_abs($num);
    print"my_abs(-3) : ".my_abs(-3)."<br>"; // 3이 출력되는지 확인
    print"my_abs(3) : ".my_abs(3)."<br>"; // 3이 출력되는지 확인


    




?>
<!-- 

    팩토리얼 사용할 줄 알면 됨.
    함수를 쓸 줄 알면됨.

        // // 예
    // function factorial_rec($num)
    // {
    //     if($num < 0) {return 0;}
    //     if($num === 1) {return 1;}                  // 재귀함수는 끝이 있어야 함. 안그럼  무한루트라서, 이 부분은 필수로 넣어줌 = 끝을 만들어 준 것이다.
    //     return $num * factorial_rec($num-1);       // 만약 음수값을 넣는다면 1을만날 수 없기 때문에 무한 루트가 돌 수 있다.
    // }
    // // 일단 factorial_rec($num) 이 함수를 시작을 해야한다. 6을 가지고 함수에 들어가면  1과 같지 않기 때문에 return에 있는 식대로 진행되고 다시 위로 올라가서 진행, 1과 같아지면 비로소 빠져나옴.

    // $num = -1; 
    // $result = factorial_rec($num);
    // print " ${num}! = $result <br>";

 -->