<?php

    function multi()                                            // 먼저 인자를 사용하지 않는다. 호출을 해서 쓰겠다. 라는 뜻. 인자값이 몇개인지 모르니까.
    {
        print "count : ". func_num_arg() . "<br>";  //func_get_args() : function에서 get한 args(아규먼트)라는 뜻. // func_num_arg() 대신 count(func_get_args()) 이거 써도 나타남.
        print "[1] : ". func_get_args()[1] . "<br>";    // [1] 부르고싶은 방이름을 넣으면 그 방 값이 나타남.
        // print "[0] : ". func_get_args(1) . "<br>"; // 잘못 사용하면 에러터짐.
    }

    multi(2);       // 1번방에 값이 없기 때문에 값이 1번방 값을 불러도 비어있는 채로 나타남.
    multi(5,10);

    // 가변인자를 옛날 스타일로 풀이 법.
    // ... 대신
    // 아래 3가지를 이용해서 풀이함.

    /*
        -- 아래 3가지는 함수 안에서만 사용이 가능하다.
    func_num_args() : 인자 수 리턴
    func_get_arg() : 인자 값 가져올 때 사용 // 쓸일이 없음. 그리고 안쓰는게 좋음. 잘못쓰면 
    func_get_args() : 인자를 배열로 받음. //이것만 써도 됨.

    //args = arguments의 줄임말.(아규먼트)
    // 함수에 실제 값이 있을때, 함수 호출할때 부르는 값.
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