<?php
    if(isset($name)) {
        print "name is ok!! <br>";
    } // 이건 $name에 값이 없으므로 뜨지 않음.

    $name = "HongGilDong";
    if(isset($name)) {          // isset($name)의 $name의 값을 넣어주면 나타난다.
        print "name is great!!";
        print isset($name);
    }
    print $name . "<br>";       // 웹개발이라서 에러를 터트리기 보다는 빈칸으로 나타냄.

    unset($name);               
    print $name . "<br>";

    print "The End";
?>
<!-- 
    isset은 값이 있는지 확인하는것이고
    unset은 변수할 메모리를 해제할때 사용.
 -->