<?php
    $score = array(1, 2, 3, 4);
    $score2 = $score; // $score도 $score2가 array를 바라보고 있기 때문에 결과가 같을것이다. 똑같은 애를 clone을 해서 하나 더 카피해서 그 값을 $score2에 준다.
    // 둘은 서로 값은 같지만 하지만 서로는 다를 것이다. 값만 같을 뿐.

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";

    $score2[0] = 100; // score2에만 주면 scroe와 같은 갑을 가지지만 카피를 했기때문에 score2에만 적용되서 변경된다.
    // php카피는 기본적으로 deep_copy이다.

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";

?>