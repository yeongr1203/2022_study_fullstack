<?php
    //삼항 연산자.= 삼항식.

    $num = 10;
    print "${num}는은" ($num %2 === 0? "짝":"홀") ."수입니다.";
    
    // 프린트 구성 = 1 [ "${num}는은" ] , 2 [($num %2 === 0? "짝" :"홀")], 3["수입니다."]
    //print "10는(은)" . ($num %2 === 0? "짝" :"홀")."수입니다."
    //print ""10는(은)."짝"."수입니다.";
    //print "10는(은) 짝"."수입니다."
    //print "10는(은) 짝수입니다."

?>