<?php

    // $i_board = $_GET['i_board'];    // i_board값을 넣는 이유는 a태그 안에 넣었기 때문에 불러온다.

    include_once 'db.php';

    $i_board = $_GET['i_board'];                                
    $sql = " SELECT title, ctnt FROM t_board WHERE i_board = $i_board ";
    // SELECT title, ctnt FROM t_board WHERE i_board =  이건 리터럴 값, 문자열로 인식. 
    // ${i_board} 이건 문자열과 붙여서 쓰고 싶을때 그냥 같이 쓰면 됨.
    // 만약 문자열과 붙이고 싶을 때, aaa$i_board 이렇게 적으면 변수값을 인식못함.
    // 그래서 괄호{}써주기 =>  aaa${i_board} 이렇게 작성.

    $conn = get_conn();                     
    $result = mysqli_query($conn, $sql);    
    mysqli_close($conn);                    
    if($row = mysqli_fetch_assoc($result)) 
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    }
    //detail = logic부분이 비슷, write = html이 비슷,
    // 이유 : 내가 쓴 내용을 수정하는것이기때문에 디테일은 보기만 가능하다면 수정은 보고 수정이 가능하기 때문에.
    // 수정화면과 등록하면을 같이도 쓸 수 있고, 지금처럼 분리해서 할 수도 있다. = 취향차이
    // 중복소스가 겹치는건 좋지 않으니 함께 쓰는 것도 괜찮다.
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