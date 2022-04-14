<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>글쓰기</h1>
    <a href="list.php"><button>리스트</button></a>
    <form action="/board/write_proc.php" method="post"> <!-- 쿼리스트링으로 날아감. 폼테그는 무조건 포스트방식. -->
        <div><input type="text" name="title" placeholder="제목"></div> <!-- 쿼리스트링 날아감 -->
        <!-- 인풋 타입에 네임이 제일  중요함. 네임값을 타이틀로 할게! 라고 약속을 하는 것. 보통 저장하고자하는 컬럼명을 적는다. 네임 = 키값. -->
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div>
            <input type="submit" value="글등록">
            <input type="reset" value="초기화">
        </div>
    </form>
    
</body>
</html>