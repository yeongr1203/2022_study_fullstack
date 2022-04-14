<?php
    include_once "db.php";
    $conn = get_conn();
    $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
    $result = mysqli_query($conn, $sql);    //결과물이 담김.
    // 
    //mysqli_close($conn); // 아래 php다썼으면 여기서 닫아도 됨.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <h1>리스트</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
        </tr>
        <?php
            // $row = mysqli_fetch_assoc($result);
            // $row = mysqli_fetch_assoc($result); //와일 문 안쓰면 줄생성해서 나타내고자하는 행만큼 설정.
            // $i_board = $row['i_board'];
            // $title = $row['title'];
            // $create_at = $row['create_at'];
            // print "<tr>";
            // print "<td>${i_board}</td>";
            // print "<td>${title}</td>";
            // print "<td>${create_at}</td>";
            // print "</tr>";
                    
            while($row = mysqli_fetch_assoc($result))
            {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>