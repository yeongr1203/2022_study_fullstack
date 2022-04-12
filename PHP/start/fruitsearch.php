<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>과일검색</title>
</head>
<body>
    <form name="fruit" method="post" action="./fruitdata.php">
        원하는 가격을 입력하세요.<br>
        가격: <input type="text" name="low"><br>
        <input type="submit" value="찾기">
    </form>
</body>
</html>
<!--
    fruitsearch.php를 php가 아닌 html을 사용해도 되지만, 보통 php로도 html 구현 가능하여, php를 사용함.
    fruitsearch.php => fruitsearch.html 사용해도 된다.
-->