<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>
    <style>
        * { margin : 0; padding : 0; text-align : center; }
        body { width: 100%;} 
        /* border: 7px solid #1EC800; */
        h1 { margin : 30px; }
        form > div { margin : 10px;}
        body > div > .main_logo{ width: 270px; }

        form > input { width: 120px; height: 40px; border-radius: 10px; border: 7px solid #1EC800; font-size: 17px;
                        background-color: #1EC800; line-height:center; color:white; margin: 0 10px; } 
    
        form > .inp_1> input, .inp_2> input, .inp_3> input, .inp_4> input, .inp_5> input, .inp_6 > input, .inp_7 > input {
            width: 190px; height: 25px; background-color: #eee; text-align: left; padding: 0px 5px;
        }
    </style>
</head>
<body>
    <div><img src="img/naver.png" class="main_logo"><div>
    <h3>회원 가입</h3>
    <!-- <a href="home.php"><button>홈으로</button></a> -->
    <form action="/naver/form_in.php" method="post">
        <input type="hidden" name="no_" value="<?=$no_?>">
        <div class="inp_1">
            아이디
            <input type="text" name="id" placeholder="아이디">
        </div>
        <div class="inp_2">
            비밀번호
            <input type="password" name="pwd" placeholder="비밀번호">
        </div>
        <div class="inp_3">
            이  름 
            <input type="text" name="no_name" placeholder="이름">
        </div>
        <div>
            성 별
            <input type="radio" name="mw" placeholder="성별" value="남"> 남자 
            <input type="radio" name="mw" placeholder="성별" value="여"> 여자 
        </div>
        <div class="inp_4">
            생년월일
            <input type="date" name = "birthday" placeholder="생년월일">
        </div>
        <div class="inp_5">
            연락처
            <input type="tel" name="phone" placeholder="연락처">
        </div>
        <div class="inp_6">
            주소
            <input type="text" name="address" placeholder="주소">
        </div>
        <div class="inp_7">
            이메일
            <input type="email" name="email" placeholder="이메일">
        </div>
        <input type="submit" value="가입하기">
        <input type="reset" value="초기화">
    </form>
</body>
</html>