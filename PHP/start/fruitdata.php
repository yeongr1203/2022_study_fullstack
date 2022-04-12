<?PHP
    $low = $_POST['low'];
    $fruit = array( "사과"    => 10, 
                    "배"      => 20,
                    "복숭아"  => 30,
                    "수박"    => 40
    );    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php print "<div>가격이 " . $low . "원 이하인 과일의 목록입니다.</div>"; ?> <!-- 뜻: 가격이 ().$slow 값)이하인 과일의 목록입니다.-->
    <table border="1">
        <tr>
            <th>이름</th>
            <th>가격</th>
        </tr>
    <?php 
        foreach($fruit as $name => $price)
        {
            if($price < $low)
            {
                print "<tr><td>" . $name . "</td><td>" . $price . "</td></tr>";
            }
        }
    ?>
    </table>
</body>
</html>
<!-- 프로그래밍 언어에서는 무조건"" (쌍따옴표) 사용. DB에서는 ''이거 사용. -->

<!-- low값에 저장된 값이 만원, 이만원 값을 가진다 라는 뜻이고, 주소창에 그대로 나타내서 보안따위 없다.
        <form name="fruit" mehtod="post" action="./fruitdata.php">
        원하는 가격을 입력하세요.<br>
        가격: <input type="text" name="low"><br>
        <input type="submit" value="찾기">
        </form>
     -->    
<!--
    method를 get방식과 post방식 두가지가 있음.


    get방식
    = 네임이 low라고 되어있는데, 로우로 어떤 값이 넘어온다~라는 뜻. 주소창에 보면 low=값이 뜸.
    post 방식
    = 네임 값을 가지고 있음. 그런데, 
    // 헤더와 바디 값을 가지고 있음. 헤더 = 주소를 가지고 있음. 겟방식은 주소 뒤에다가 쿼리 뒤에다 값을 날려서 쿼리스트링으로 나타냄.
    // 쿼리스트링 = 주소?low=10000 ?포함해서 뒤에 값을 그대로 나타내어서 주소 뒤에 나타나도 상관없는것은 겟을 사용.  
    //쿼리 스트링, 파라미터가 있음.
    예) 네이버에 bts 검색후 그 주소값 : https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=bts
    // 이런 값을 보내면 검색이 되서 나타나는대, bts대신 소녀시대라고 검색하면 그bts가 아닌 소녀시대로 나타남. 이게 다이나믹html이다.
    // 변경을 해도 같은 값이 나온다면 그냥 정적인 html일뿐.

    //포스트는 보안이 중요. 내가 적은 값이 안보였음 좋겠다 할때. 데이터가 바디에 실려서 값이 보이지 않음.
    //포스트 = 예를 들어서 비밀번호와 같은 것들은 포스트방식. 파일을 올릴때도 포스트로 사용.

-->

