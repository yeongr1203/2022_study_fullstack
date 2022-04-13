<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{ border-collapse: collapse; }
    table, td{ border: 3px solid #000; }
    td { padding: 5px; text-align: center;}
    
</style>
<body>
<?php



    $val = rand(2,5);
    print_table($val);
      
    // // 내풀이
    // function print_table($val)
    // {
    //     $a=1;
    //     print "<table>";
    //     for($i=0; $i<$val; $i++)
    //     {
    //         print "<tr>";
    //         for($b=0; $b<$val; $b++){
    //             print "<td>".$a++."</td>";
    //         }
    //         print "</tr>";
    //     }
    //     print "</table>";
    // }

    // 선생님 풀이.
    function print_table($val)
    {
        $num = 1;
        print "<table>";
        for($z=0; $z<$val; $z++)
        {
            print"<tr>";
            for($i=0; $i<$val; $i++)
            {
                print "<td>";
                print $num++;
                print "</td>";
            }
            print"</tr>";
        }
        print "</table>";
    }
?>  
</body>
</html>
<!-- 
    문제)
    $val = rand(2,5);
    print_table($val);
    // $val = 2;         -- 각 값만큼 테이블 (행,열)생성.
    // $val = 3;  
 -->
