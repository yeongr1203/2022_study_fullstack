
<?php

    /*
    만약에 star값이 2
    **
    **
    
    star값이 4
    ****
    ****
    ****
    ****
    */
// $star = rand(2,10);

// print "star :".$star."<br>" ;
// for( $i = 0; $i<$star; $i++)
// {
//     for ( $a=1; $a<=$star; $a++ )
//     {
//         print "*";
//     }
//     print "<br>";
// }

//썜 풀이.

$star = rand(2,10);
print $star."<br>";

for ($z=0; $z<$star; $z++){ //줄(로우) 담당.
    for ($i=0; $i<$star; $i++) //칸(컬럼) 담당.
    {
        print " * ";
    }
    print "<br>";
}



?>
<!-- 
밖 for :
안 for 
: 변경하려는 값이 스타값만큼 별이 나타나야해서 $a<=$star로 작성.
: 랜덤으로 나오는 숫자만큼 별이 가로 세로 모두 동일한 수 만큼 나와야하므로 
    초기화 $a 값이 아닌 $a변경값에 넣어준다.


-->



