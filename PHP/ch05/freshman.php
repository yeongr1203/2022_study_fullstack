<?php
    $freshman = array(
        "David" => "Computer", // 인덱스값에 정수, 문자열 모두 가능. 예) David, Alice 등등 위치 = 인덱스 값 
        "Alice" => "Math",
        "Elsa"  => "Physics",
        "Bob"   => "Music",
        "Chris" => "Electronics"
    );

    print_r($freshman);
    print "<br><br>";
    print $freshman["David"] . "<br>";
    print $freshman["Alice"] . "<br>";
    print $freshman["Elsa"] . "<br>";
    print $freshman["Bob"] . "<br>";
    print $freshman["Chris"] . "<br>";

    $freshman["Bob"] = "dance"; // $freshman["추가 인덱스"] ="추가문자열";
    print "<br><br>";
    print $freshman["Bob"]."<br>"; //추가한 인덱스 값을 불러오기.

    $freshman["Frank"] = "History";
    print $freshman["Frank"] . "<br>";

    $freshman[0] = "안녕";
    print "<br><br>";
    print_r($freshman); // 숫자넣고 문자열 설정 가능하지만, 사용하지 않는것이 좋다.

// 한번에 다 담는 것을 컬렉션인라고 함.

?>