<?php

$n1 = 9;
$n2 = 5;

// 정의는 호출이 되지 않으면 쓸모가 없다.
// print_sum을 호출. 안의 $n1, $n2의 값을 복사해서 $num1, $num2에 복사해서 넣어줌.
// 사용할때만 구현되고, 끝나면 메모리가 해제됨.
// function 안에는 return을 포함하고 있기 때문에 하나의 정의가 구현이 되고 나면 다시 상위로 올라와서 다시 구현되는데, 1번은 했으면 다음 2번째를 구현함.
// 이 방식은 메모리를 너무 많이 사용함.

function print_result($num1, $symbol, $num2, $result)
{
    print "$num1 $symbol $num2 = $result <br>";
}

// 선생님 풀이.
// 변수명 적용 굳이 하지 않아도 function으로 계산이 가능.
// php에서 중요한건 html로 변환해주는것. 


function print_sum($num1,$num2)
{
    $result = $num1 + $num2;
    print_result($num1,"+", $num2, $result);            // 결과값 : $num1 + $num2 = $result //print_result 이렇게 출력한다는 구성.
}

function print_minus($num1,$num2)                       // 선언부
{
    print_result($num1,"-", $num2, ($num1 - $num2));    // 결과값 : $num1 - $num2 = $result         // 구현부 = { } 이 안에 있는 모든것.
}

function print_multi($num1,$num2)
{
    print_result($num1,"*", $num2, ($num1 * $num2));    // 결과값 : $num1 * $num2 = $result
}

function print_div($num1, $num2)
{
    print_result($num1, "/", $num2, ($num1 / $num2));   // 결과값 : $num1 / $num2 = $result
}

function print_mod($num1, $num2)
{
    print_result($num1, "%", $num2, ($num1 % $num2));   // 결과값 : $num1 % $num2 = $result
}

print_sum($n1,$n2);
print_minus($n1,$n2);
print_multi($n1,$n2);
print_div($n1,$n2);
print_mod($n1,$n2);

?>