<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border-collapse : collapse;}
        table, td {border : 1px solid #000;}

    </style>
</head>
<body>
    <table>
    <?php

    $val= rand(3,10);
    print " val : $val<br>";
    $num = 1;
    for ($i=0; $i<$val; $i++)
    {
        print "<tr>";
        for($z=0; $z<$val; $z++)
        {
            print "<td>".$num++."</td>";
        }
        print "<tr>";
    }

    print "---------------------------------<br>";

    // 숫자는 1씩 증가 값을 구하는 것이여서 $num이라는 변수를 써서 쉽게 만듬.
    //그리고 ++을 붙여서 1씩 증가로 만들어준다. 
    

    ?>
    </table>
</body>
</html>


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



