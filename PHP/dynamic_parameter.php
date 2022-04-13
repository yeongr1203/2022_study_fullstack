<?php

    function print_sum(...$vals)  // ...을 가변인자라고 부름.
    {
        print $val;
        $sum = 1;
        for($i=1; $i < count($vals); $i++)
        {
            $sum += $vals[$i];
        }        
        print "sum : ".$sum."<br>";
    }

    // //선생님풀이
    // function print_sum(...$val)
    // {
    //     $sum =0;
    //     for($i=0; $i<count($vals); $i++)
    //     {
    //         $val = $vals[$i];
    //         $sum += $val;
    //         // //$sum += $vals[$i]; // 위에 두 줄을 한줄로 축약한것. 쉽게 풀어주신것. 원래 간단하게 작성은 이렇게 사용함.
    //     }
    //     // foreach ($vals as $val)
    //     // {
    //     //     $sum += $val;
    //     // }
    //     print "sum : $sum <br>";
    //     // print "sum : ".array_sum."<br>"; // 이렇게 작성해도 됨.
    // }


    //sum아래값들을보내면 배열로 들어감.

    print_sum(1,2);       // sum: 3
    print_sum(1,2,3);     // sum: 6
    print_sum(1,2,3,4);   // sum: 10
    // 가변인자함수, sum이 1,2 일수도 있고, 1,2,3 일수도 있고 하는 것을 뜻함.



?>