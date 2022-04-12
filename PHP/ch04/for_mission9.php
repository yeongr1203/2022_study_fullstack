
<?php


    /*
    만약에 star값이 3dlaus
    *
    **
    ***

    만약에 star값이 6
    *
    **
    ***
    ****
    *****
    ******
    */ 

    //내풀이

    // $star = rand(3,10);
    // print $a;

    // for ( $i=1; $i<$star; $i++)
    // {
    //     for( $a=0; $a<$i; $a++)
    //     {
    //         print "*";
    //     }
    // print "<br>";
    // }

    // 썜풀이
    // 인덱스 값만큼 돌면 인덱스 값만큼 나타남.
    
    // $star = rand(3,10);
    // print "star:$star<br>";
    // for($i=0; $i<$star; $i++)
    // {
    //     for($z=0; $z<=$i; $z++)
    //     {
    //         print "*";
    //     }
    //     print "<br>";
    // }

    // print "-----<br>";

    $star = rand(3,10);
    print "star: $star <br>";

    $sum = "";
    for($z=1; $z<=$star; $z++)
    {
        $sum = $sum."@";
        print "{$sum}<br>";
    }

?>
<!-- 




-->



