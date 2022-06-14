<?php
    include_once 'db.php';

    $i_board=$_GET['i_board'];
    $conn = get_conn();
    $sql =
    " 
    SELECT *
    FROM t_board
    WHERE i_board = $i_board
    ";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row=mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정하기</title>
</head>
<body>
    <a href="write.php"><button>새글작성</button></a>
    <a href="list.php"><button>리스트</button></a>
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    <form action="mod_proc.php?i_board=<?=$i_board?>" method="post">
        <input type="hidden" name="i_board" value="<?=$i_board?>">
        <div><input type="text" name="title" placeholder="내용" value="<?=$title?>"></div>
        <div><textarea name="ctnt" placeholder="내용"><?=$ctnt?></textarea></div>
        <input type="submit" value="수정">
        <input type="reset" value="초기화">
    </form>
</body>
</html>