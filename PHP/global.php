<?php

    function counts()
    {
        global $i;
        $i = $i + 1;
    }



    $i=0;
    while($i<10)
    {
        counts();            //전역변수 $i값을 1씩 증가시키는 변수.
        print $i."<br>";
    }





    // 1
    // 2
    // 3
    // ...
    // 10



?>