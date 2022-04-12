
<?php

$val= rand(3,10);
print "$val";
print "<table>";
for ( $i=1; $i<=$val; $i++)
{
    print "<tr>";
    for($a=1; $a<=$val; $a++)
    {
        print "<td> a </td>";
    }
    print "</tr>";
}
print "</table>";

?>

<!-- 

 print "값은 : $val <br>";
for($i=1; $i<=$val; $i++)
{
    for($a=1; $a<=$i; $a++)
    {
        print $i;
    }
}



-->



