<?php

    // for 문은 내가 몇번 반복할지 정하는 것이다.
    //       A       B      C
    for ( $i = 0 ; $i < 10 ; $i++ ) // 변수 i 값이 반복할 거다. 10번 반복. 반복하면서 +1을 더 할것이다.
    {

         print "$i <br>";
    }
    print "끝@!!";
    // A:초기화 공간
    // B:반복 비교문
    // C: 증감식.

    // A > B > 실행 > C
    //   > B > 실행 > C
    //   > B > 실행 > C
    // ...  B가 false가 될때 까지 실행 후  뒤에 print 나타냄.

    // 한번에 다 보이지만 실상은 한개 한개씩 나타난것.
    // A는 최초 딱 한번만 실행. 그다음은 에서 실행.
    //  

?>
