<?php
    // 함수호출로 해당되는 단을 찾아서 나타내도록 하기.
    /*
    // 구구단 
    dan = 2;
    2 X 1 =2
    2 X 2 =4
    ...
    2 X 9 = 18

    dan = 9
    9 X 1 = 9
    ...
    9 X 9 = 81
    */

    $dan = rand(2,9);
    // // print_gugudan($dan);
    // print_gugudan_form_to(2,6);

    // function print_gugudan_form_to($a,$b)
    // // function print_gugudan_form_to($dan)
    // {
    //     for($a=2; $a<=$b; $a++)
    //     {
    //         for($i=1; $i<10; $i++)
    //         {
    //             print "$a X $i = ".($a * $i). "<br>";
    //         }
    //     }
    // }

 


    //선생님풀이
    print_gugudan_form_to(2,6);

        function print_gugudan_form_to($sdan,$edan)
        {
            for($dan=$stan; $dan<=$edan; $dan++)
            {
                print_gugudan($dan);
                // 아래의 for문과 중복이므로 최대한 적게 작성해야하므로 위와 같이 간단하게 표현이 가능하다.
                // for($i=1; $i<10; $i++)
                // {
                //     print " $dan X $i = ". ($dan * $i) ."<br>";
                // }
                print "<br>";
            }
        }


    // print_gugudan($dan);
    function print_gugudan($dan)
    {
        for($i=1; $i<10; $i++)
        {
            print "$dan X $i = " . ($dan * $i) . "<br>";
        }
    }

?>