<?php

    // [4,5,6,7,8,9,10] 이렇게 출력하게 해주세요.
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다." 가 
    // 출력되게 해주세요.



    $snum = 4;
    $enum = 10;
    print_num_from_to($snum, $enum);

    function print_num_from_to($snum, $enum)
    {

        if ($enum < $snum) { 
            print " -- 종료값이 더 작을 수 없습니다.-- ";       // true 이고 print되고 return으로 돌아감.
            return;
        }

        print "[ ";
        for($i=$snum; $i<=$enum; $i++){
            if ($i > $snum ) { print ", "; }
            print $i;
        }
        print " ]";
    }




    // function print_num_from_to($snum, $enum)
    // {
    //     print "[";
    //     for($i=$snum; $i<=$enum; $i++)
    //     {  
    //         print $i;
    //         if ($i < $enum ) { print ", ";}
    //         else if ($snum > $enum) { print "종료값이 더 작을 수 없습니다.";}
    //     }
    //     print "]";
    // }  






    





?>