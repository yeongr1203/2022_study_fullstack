<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>
    <style>
        * { margin : 0; padding : 0;  }
        body { width: 100%; margin: auto; display: flex; }
        body > div { align-items: center; justify-content: center;  }
        /* form > div { align-items: center; justify-content: center; }  */
        .main_logo { width: 500px; }
    
    </style>
</head>
<body>
    <div><a href="http://www.naver.com"><img src="img/31logo.gif" class="main_logo"></a><div>
    <!-- <a href="home.php"><button>홈으로</button></a> -->
    <form action="/naver/form_in.php" method="post">
        <input type="hidden" name="no_" value="<?=$no_?>">
        <div>
            <div>아이디</div> 
            <div class="intt_1"><input type="text" name="id" placeholder="아이디"></div>
        </div>
        <div>
            <div>비밀 번호</div>
            <div class="intt_2"><input type="password" name="pwd" placeholder="비밀번호"></div>
        </div>
        <div>
            <div>이  름</div> 
            <div class="intt_3"><input type="text" name="no_name" placeholder="이름"></div>
        </div>
        <div>
            <div class="gender">성  별</div>
            <div class="intt_4">
                <input type="radio" name="mw" placeholder="성별" value="남"> 남자 
                <input type="radio" name="mw" placeholder="성별" value="여"> 여자 
            </div>
        </div>
        <div>
            <div> 생년월일 </div>
            <div class="intt_5"><input type="date" name = "birthday" placeholder="생년월일"></div>
        </div>
        <div>
            <div>연락처</div>
            <div class="intt_6"><input type="tel" name="phone" placeholder="연락처"></div>
        </div>
        <div>
            <div>주소</div>
            <div class="intt_7"><input type="text" name="address" placeholder="주소"></div>
        </div>
        <div>
            <div>이메일</div>
            <div class="intt_8"><input type="email" name="email" placeholder="이메일"></div>
        </div>
        <input type="submit" class="finish" value="가입하기">
    </form>
    
</body>
</html>
<!--  -->