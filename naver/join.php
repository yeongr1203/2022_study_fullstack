<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>
    <style>
        * { margin: 0; padding: 0;}
        a { text-decoration : none; }
        body { box-sizing: border-box;}
        body> div > a {width:300px;}
        .main_logo { display: block; margin: 50px auto; width: 250px; justify-content: center; }
        form > div { margin: 10px 0px; justify-content : center; }
        form > div > div {margin: 3px 0px;}
        .intt_1> input, .intt_2> input, .intt_2_1> input, .intt_3> input, .intt_5> input, .intt_6> input, .intt_7> input, .intt_8 > input 
        { width: 300px; height: 40px; border: 1px solid #ccc; background-color: #cccccc10; }
        .ji_1 , .ji_2, .ji_2_1, .ji_3, .ji_4, .ji_5, .ji_6, .ji_7, .ji_8, .finish { display: block; margin: 10px auto; width: 300px; justify-content: center;  }
        .finish { width: 300px; height: 40px; border: 1px solid #1EC800; background-color: #1EC800; color: #fff; font-size: medium; }
        .finish:hover {cursor:pointer;}
        form > div > div:first-child { color: #000; margin-bottom: 2px; font-weight: bold; font-size: medium; }
    </style>
</head>
<body>
    <div><a href="http://www.naver.com"><img src="img/naver_basic.png" class="main_logo"></a><div>
    <form action="join_proc.php" method="post">
        <div class="ji_1">
            <div>아이디</div> 
            <div class="intt_1"><input type="text" name="uid" placeholder=" 아이디"></div>
        </div>
        <div class="ji_2">
            <div>비밀번호</div>
            <div class="intt_2"><input type="password" name="upw" placeholder=" 비밀번호"></div>
        </div>
        <div class="ji_2_1">
            <div>비밀번호 확인</div>
            <div class="intt_2_1"><input type="password" name="confirm_upw" placeholder="비밀번호 확인"></div>
        </div>
        <div class="ji_3">
            <div>이  름</div> 
            <div class="intt_3"><input type="text" name="nm" placeholder=" 이름"></div>
        </div>
        <div class="ji_4">
            <div>성  별</div>
            <div class="intt_4">
                <input type="radio" name="gender"value="0"> 남자 
                <input type="radio" name="gender" value="1"> 여자 
            </div>
        </div>
        <div class="ji_5">
            <div> 생년월일 </div>
            <div class="intt_5"><input type="date" name = "birth" placeholder=" 생년월일"></div>
        </div>
        <div class="ji_6">
            <div>연락처</div>
            <div class="intt_6"><input type="tel" name="phone" placeholder=" 연락처"></div>
        </div>
        <div class="ji_7">
            <div>주소</div>
            <div class="intt_7"><input type="text" name="add" placeholder=" 주소"></div>
        </div>
        <div class="ji_8">
            <div>이메일</div>
            <div class="intt_8"><input type="email" name="email" placeholder=" @naver.com"></div>
        </div>
        <input type="submit" class="finish" value="가 입 하 기">        
    </form>
</body>
</html>