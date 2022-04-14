<?php




    $arr = [ 10, 20, 30, 40, 50 ];
    plus_array($arr, 10);
    print_r($arr);

    // 선생님풀이.

    function plus_array(&$arr, $val)
    {
        foreach($arr as $k => $v)
        {
            $arr[$k] = $v + $val;
        }
    }


    // 아침정리.

    $arr = [ 10, 20, 30, 40, 50 ];
    $num = 5;
    plus_array($arr, 10);
    print "num : $num <br>";
    print_r($arr);

    function plus_array(&$arr, &$val)
    {
        $val = 6;
        foreach($arr as $k => $v)
        {
            $arr[$k] = $v + $val;
        }
    }





?>