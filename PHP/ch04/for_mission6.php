
<?php

    // 선생님 풀이 - php기준으로 풀이.
    for($i=1; $i<10; $i++)
    {
        for($z=2; $z<10; $z++)
        {
            $result = $z * $i;
            print "${z}X${i}=$result";
        }
        print "<br>";
    }

?>
<!-- 

내 풀이.

<table>
<tr>
// php시작
for ($i=2; $i<10; $i++)
{
    print "<td>";
    for( $a=1; $a<10; ++$a )
    {
        $f = $i * $a ;
        print " $i X $a = $f<br>";
    }
    print "</td>";
}
//php끝
</tr>
</table>



-->



