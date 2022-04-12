<?php

 //선생님 
 print "-- 시작 -- <br>" ;
 while (true){
     $r_val = rand (1,10);
     if($r_val == 10) {break;}
     print "r_val :  $r_val <br>";
 }
 print "-- 끝 --<br>";
 //while문에 무한대(true)설정 후 if문과 브레이크를 사용해서 진행.




?>

<!-- 
while = 조건체크 후 실행하고 진행함. 
do while은 먼저 실행하고 조건체크 후 실행.
-->