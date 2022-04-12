<?php

    /*
    2X1 = 2
    2X2 = 5
    ...
    2X9 = 18
    -------------
    3X1 = 3
    3X2 = 6
    ...
    3X9= 27
    -------------
    ...
    9X9 = 81
    */

    for($i=2; $i<10; $i++)
    {
        for($a=1; $a<10; $a++)
        {
            $X = $i * $a ;
            print " $i X $a = $X <br>";
        }
    print "--------------------<br>";
    }



?>

<!-- 

선생님 풀이.

for( $i=2; $i<10; $i++ )
{
    for( $z=1; $z<10; $z++ )
    {
        $result = $i * $z;
        print "$i X $z = $result <br>"
    }
    print "---------------<br>";
}


---


    for( $i=2; $i<10; $i++ )
    {
        if( $i > 2 ) { print "-----------<br>"; }
        for( $z=1; $z<10; $z++ )
        {
            $result = $i * $z ;
            print "$i X $z = $result <br>" ;
        }

    }
    // 이 식은 마지막에 ---- 9단 끝에 줄 없애기 위해서 if문을 작성하여 만든 것.
    // 밖은 2부터 시작하기때문에 1로 시작.
    if문은 2보다 작은 값일때 print하겠다 -- 2단끝나고 줄나오고 9까지 나오고나면 10이 안나오므로 줄이 안나옴.
    그리고 안에는 두번째 숫자가 1부터 시작해야하니까 저렇게 설정.

-->



