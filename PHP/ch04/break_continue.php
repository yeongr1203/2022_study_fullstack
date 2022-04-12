<?php

    for($i=0; $i<100; $i++)
    {
        if ($i == 40) {break;}
        print $i."<br>";
    }

    // break는 바로 빠져나가서 continue가 실행되므로 밑에 print값이 인쇄되지 않음.
    // 끝까지 실행되지 않고 중간에 for문을 멈추고 싶을 때 사용한다.
    // break를 만나면  바로 그 작업에서 빠져 나온다 라는뜻.

    print "----------------continue---------------<br>"
    for ($i=0; $i<20; $i++)
    {
        if($i==12){continue;}
        print $i."<br>";
    }

    // continue는 if 조건식값에 대한 것을 실행시키지 않고 다시 for문 처음으로 돌아가서 실행된다.
    // 즉 12는 빠지고 값이 나타난다.
    // continue 는 여러번 실행 될 수 있다.




?>
