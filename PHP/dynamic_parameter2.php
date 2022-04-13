<?php

    function multi()
    {
        print "count : ". count(func_get_args()) . "<br>";
        print "[0] : ". func_get_args()[1] . "<br>";
        // print "[0] : ". func_get_args(1) . "<br>"; // 잘못하용하면 에러터짐.
    }

    multi(2);
    multi(5,10);

    // 가변인자를 옛날 스타일로 풀이 법.
    // ... 대신
    // 아래 3가지를 이용해서 풀이함.

    /*
        -- 아래 3가지는 함수 안에서만 사용이 가능하다.
    func_num_args() : 인자 수 리턴
    func_get_arg() : 인자 값 가져올 때 사용 // 쓸일이 없음. 그리고 안쓰는게 좋음. 잘못쓰면 
    func_get_args() : 인자를 배열로 받음. //이것만 써도 됨.

    //args = arguments의 줄임말.
    */
    function print_sum()  
    {
       print "func_num_args () : " . func_num_args () . "<br>";        // 출력 : 1 <br> 2 , 인자 값이 몇개있는지 확인가능.
       print "func_get_arg (0) : " . func_get_arg (0) . "<br>";
       print "func_get_arg (1) : " . func_get_arg (1) . "<br>"; 
       print "----<br>";
    }
    // print_sum(10);
    print_sum(9,11,13);


        // dynamic_parameter.php 처럼 쓸 수 있는 것 .
        function sum()
        {
            print "count : ". count(func_get_args()) . "<br>";
            $sum = 0;
            foreach(func_get_args() as $val)    // $val에는 순차적으로 0번방에 있는 값을 넣는다.
            {
                $sum +=$val;
            }                                   // foreach를 쓰면 
            return $sum;
        }

        // print " sum : ". sum(1,2) . "<br>";
        // print " 썸 : " . sum(1,2,10) .  "<br>";
        // print " 썸 : ". sum(1,2,10,11,13,14) . "<br>";
?>