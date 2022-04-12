<?php

 $numbers = array (10,20,30,40,50);

 print $numbers ."<br>"; // 이건 array만 찍히고 값은 없음.
 print_r ($numbers); //안에 있는 값을 볼 수 있다.
 print "<br>";

array_push($numbers, 60);
print_r($numbers); // print_r() = 무조건 함수 찍을땐 ()이거 써주기.
print "<br>";




?>