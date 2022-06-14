<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>새 글 작성하기</title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <form action="/board11/write_proc.php?i_board=<?=$i_board?>" method="post">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용" ></textarea></div>
        <input type="submit" value="저장">
        <input type="reset" value="초기화" >
    </form>
</body>
</html>