<?php

    // [4,5,6,7,8,9,10] 이렇게 출력하게 해주세요.
    // 만약 enum값이 더 작으면 [5,4,3,2,1] 이 출력되게 해주세요.

    $snum = 5;
    $enum = 1;
    print_num_from_to($snum, $enum);



    function print_num_from_to($snum, $enum)
    {
        print "[ ";
        if ($enum < $snum){ print "<br>" }
        for ($a=$snum; $a>=$enum; $a--){
                print $a;
        } 
        else{
            for( $i=$snum; $i<=$enum; $i++)
            {
                print $i.", ";
            } 
        }
        print "]";
    }











    


    // function print_num_from_to($snum, $enum)
    // {
    //     if ($enum < $snum){
    //         print "[ ";
    //         for ($a=$enum; $a<$snum; $a--){
    //             print $a.", ";
    //         }
    //         print "]";
    //     }
    // }


?>