<?php
    //객체 안에 함수가 있으면 method(메소드)라고 부른다. 

    //객체 안이 아니라면 function(함수)라고 부른다.
    //함수 function, 

    $result = sum(10, 11); // 호출에 부름, 사용하는 함수.

    print "썸 : $result <br>";
    print "sum : " . sum(30, 40) . "<br>";


    minus(35, 12); //리턴된걸 복사하여 바로 주기 때문에 굳이 함수호출할 필요 없이 그냥 그대로 사용가능.
    minus(10, 2); // $함수 = minus(값1, 값2)에서 $함수 = 이건 필요가 없음.

    print" r: " .$r . "<br>";

    function sum($n1, $n2) // 정의 sum=함수명 (파라미터(매개정렬1),파라미터(매개정렬2))소괄호 필수. //=선언부라고 함. 
    {
        return $n1 + $n2; //구현부라고 함. // 
    } //만든다. // 호출을 당한다면 나 이렇게 동작할꺼야 라고 하는 뜻. 값을 계산하고 다시 리턴 돌려줘서 sum을 구현하면 result값이 적용됨.
 

    function minus($n1, $n2)
    {
        print "minus : " . ($n1 - $n2) . "<br>";
        return;    
        // 모든함수는 리턴을 가지고 있습니다.생략을 해도 자동으로 적용이 된다.
        // 모든함수는 return이라는 키워드를 만나야 다시 돌아간다.
    }
    

    function minus($n1, $n2)
    {
        print" r: " .$r . "<br>";

    }
    


    
?>