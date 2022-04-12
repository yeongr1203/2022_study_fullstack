<?php
    if(isset($name)) {
        print "name is ok!!";
    }

    $name = "HongGilDong";
    if(isset($name)) {
        print "name is great!! <br>";
        print isset($name); // 
    }
    print $name . "<br>";

    unset($name);
    print $name . "<br>";

    print "The End";
?>

<!-- 

    isset은 값이 있는지 확인하는것이고
    unset은 변수할 메모리를 해제할때 사용.




 -->