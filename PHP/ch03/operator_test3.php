<?php

    //num=3, num=10, num=15
    // 3은 3의 배수입니다. 10은 5의 배수입니다. 15는 3과 5의 배수입니다.

    $num= 15;

    if ($num % 3 == 0 &&  $num % 5 == 0 )
    {
        print "3과 5는 배수입니다.";
    }
    else if ($num % 3 == 0)
    {
        print "3의 배수입니다." ;
    }
    else if ($num % 5 == 0 )
    {
        print "5의 배수입니다.";
    }
    







    // $num = 15;
    // if( $num % 3 == 0 || $num % 5 == 0)     //여기서는 3의 배수인데 5의 배수가 아니면 참이 아니야 ㅇㅋ?
    // {
    //     print $num."은 3과 5의 배수입니다.";
    // }
    // elseif ( $num % 3 == 0)
    // {
    //     $num = 3;
    //     print $num."3의 배수입니다.";
    // }

?>

<!-- 

- 1. if문을 활용해서 3의 배수를 구하세요
실행결과1 변수 num = 3	=> 3은 3의 배수가 맞습니다.
실행결과2 변수 num = 6	=> 6은 3의 배수가 맞습니다.
실행결과3 변수 num = 7	=> 7은 3의 배수가 아닙니다.

- 2. if문을 활용해서 5의 배수를 구하세요
실행결과1 변수 num = 5	=> 5은 5의 배수가 맞습니다.
실행결과2 변수 num = 10	=> 10은 5의 배수가 맞습니다.
실행결과3 변수 num = 11	=> 11은 5의 배수가 아닙니다.


- 응용) if 문을 활용해서 3과 5의 배수를 구하세요.(이거는 조금 더 생각해봐야할꺼얌!)
실행결과1 변수 num = 3	=> 3은 3의 배수입니다.
실행결과2 변수 num = 10	=> 10은 5의 배수입니다.
실행결과3 변수 num = 15	=> 15은 3과 5의 배수입니다.


점심때 풀어보고 끝나고 내가 봐줄껭
너무 스트레스 받아하지말고 코딩은 여러문제 접해봐야 아~이럴때는 이렇게 푸는구나 할수 있어
언니의 포기를 거절합니다!!!!^^

그냥 코드 하나를 짜고 변수만 바꿨을때 실행결과랑 일치만 하면돼
봐바
이런식으로
근데 정답이넹!!
이제 감잡았엉??
조금? 근데 더 풀어야 할거같아....웅웅 다음꺼풀어봐 저렇게 한개 코드만 짜고 변수만 바꿔서 실행해봐
응응~ 고마웡~
3개다?
3의 배수 5의 배수도 있는데 그냥 15만 했엉
웅 안돼^^
ㅋㅋㅋㅋㅋㅋㅋ 알겠엉~
아니양
지금 여기가 else if 가 이쑈는지 모르갰느ㅜㄴ데
숫자가 우선 15배수인지는 알자나 and 로 해서
이제 밑에 else 라고 들어 온것중에는 3의 배수랑 5의 배수도 포함되어있자나
그러면 그걸 또 걸러줘야징
15풀었는 문제에서 저기 안에서 3과 5를 걸러주라는거지?
15는 풀었는데 언니가 and로 묶었자나
그래서 











if형식

if( 조건1)
{실행문}
elseif (조건2)	//이말은 조건1이 아닌 것중에 조건 2는 충족하는거
{실행문}
else		//조건1도 아니고 조건2도 아닌거
{실행문}

else는 조건을 안주는데요....
조건을 주고 싶으면 elseif쓰면 되지융
 넹넹!! 긎리고 하나가 강사님 if문 설명할때 말해줬어
팁이라고 첫조건은 참이 아닐것같은걸 주는거라고
쉽게 말하면 범위가 나머지보다 작은거 또는 조금더 디테일한거





 -->