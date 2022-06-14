<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 작성</title>
</head>
<body>
    <h1>글작성</h1>
    <form action="write_proc.php" method="post">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div>
            <input type="submit" value="글작성">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>

<!-- 

보통 포스트 방식으로 쓰는 것은 폼태그를 사용한다.

a태그 사용은 겟방식, a태그 눌러서 주소값이동하는 것도 겟방식.
 -->