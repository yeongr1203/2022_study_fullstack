<?php

include_once "db/db_board.php";

$i_board = $_GET["i_board"];
$param = [
    "i_board" => $i_board
];

// $item = sel_board($param);
// $title = sel_board($param)['title'];
// $ctnt = sel_board($param)['ctnt'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 수정</title>
</head>
<body>
    <h1>글 수정</h1>
    <form action="mod_proc.php" method="post">
        <div><input type="hidden" name="i_board" value="<?=$i_board?>" readonly></div>
        <div><input type="text" name="title" placeholder="제목" value="<?=sel_board($param)['title']?>" ></div>
        <div><textarea name="ctnt" placeholder="내용"><?=sel_board($param)['ctnt']?></textarea></div>
        <div>
            <input type="submit" value="글수정">
            <input type="reset" value="초기화">
        </div>
    </form>
    
</body>
</html>