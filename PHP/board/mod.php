<?php

    // $i_board = $_GET['i_board'];    // i_board값을 넣는 이유는 a태그 안에 넣었기 때문에 불러온다.

    include_once 'db.php';

    $i_board = $_GET['i_board'];                                
    $sql = " SELECT title, ctnt FROM t_board WHERE i_board = $i_board ";

    $conn = get_conn();                     
    $result = mysqli_query($conn, $sql);    
    mysqli_close($conn);                    
    if($row = mysqli_fetch_assoc($result)) 
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
    <title>글수정</title>
</head>
<body>
    <h1>글수정</h1>
    <a href="detail.php?i_board=<?= $i_board ?>"><button>글로 이동</button></a> 
    <form action="mod_proc.php" method="post">
        <input type="hidden" name = "i_board" value="<?=$i_board?>">
        <div><input type="text" name="title" placeholder="제목" value="<?= $title ?>"></div> 
        <div><textarea name="ctnt" placeholder="내용"><?= $ctnt ?></textarea></div>
        <div>
            <input type="submit" value="글수정">
            <input type="reset" value="초기화">
        </div>
    </form>
    
</body>
</html>