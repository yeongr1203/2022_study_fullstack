<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];  // 정렬이 되는 코딩을 해야함. 하드코딩이 아님.

    for($i=count($arr)-1; $i>0; $i--)   // arr배열수 -1 부터 0까지 감소하며 반복, 6부터~
    {
        for($z=0; $z<$i; $z++)
        {
           if($arr[$z] > $arr[$z+1]) {
               $temp = $arr[$z];        //임시저장소에 z값 저장
               $arr[$z] = $arr[$z+1];   //z값에다가 =z+1값 복사
               $arr[$z+1] = $temp;      // 임시저장소 값을 다시 넣기
                                        // 결론은 자리바꾸기.
           } 
        }
        print_r($arr);
        print "<br>";
    }

    print "<br>";
    print "<br>";
    print_r($arr);
?>
<!-- 
    버블정렬 : 높은 숫자가 앞에 있으면 많이 교환이 되어야하기때문에 성능저하가 크다.
 -->