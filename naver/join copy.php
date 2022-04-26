<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>
    <style>
        * { margin : 0; padding : 0;  }
        body { width: 100%; margin: auto; align-items: center; position:relative;} 
        h1 { margin : 30px; }
        form > div { margin : 10px;}
        body > div > a > .main_logo{ width: 400px; text-align: center; }
            /* position: absolute; left:50%; top:50%; transform: translate(-50%, -50%);} */

       
        /* .join_box { width: 700px; display: flex; justify-content: center; align-items: center; } */
        .join_box { width: 1000px; display: flex; justify-content: center; align-items: center; }
        .join_box > .join_t { float:left; margin: 0px 20px;}
        .join_box > .join_t > div {padding: 5px 0; }
        .join_i > .intt_1 { width: 300px; }
        .join_box > .join_i > div {padding: 5px 0; width: 300px; }

        form > .j_finish > input { width: 400px; height: 40px; border: 7px solid #1EC800; font-size: 20px;
                        background-color: #1EC800; align-items: center; color:white; margin: 0 10px; } 
        form > .j_finish > input:hover { color:#1EC800; font-weight: bold; border:2px solid #1EC800; background-color: #fff;}
        
        
        /* form > .join_i {
            width: 190px; height: 60px; background-color: #eee; text-align: left; padding: 0px 5px;
        } */
    
    </style>
</head>
<body>
    <div><a href="http://www.naver.com"><img src="img/31logo.gif" class="main_logo"></a><div>
    <!-- <a href="home.php"><button>홈으로</button></a> -->
    <form action="/naver/form_in.php" method="post">
        <!-- <input type="hidden" name="no_" value="<?=$no_?>"> -->
        <div class="join_box">
            <div class="join_t">
                <div class="int_1">아이디</div>
                <div class="int_2">비밀 번호</div>
                <div class="int_3">이  름</div> 
                <div class="int_4">성  별</div>
                <div class="int_5"> 생년월일 </div>
                <div class="int_6">연락처</div>
                <div class="int_7">주소</div>
                <div class="int_8">이메일</div>
            </div>
            <div class="join_i">
                <div class="intt_1"><input type="text" name="id" placeholder="아이디"></div>
                <div class="intt_2"><input type="password" name="pwd" placeholder="비밀번호"></div>
                <div class="intt_3"><input type="text" name="no_name" placeholder="이름"></div>
                <div class="intt_4">
                    <input type="radio" name="mw" placeholder="성별" value="남"> 남자 
                    <input type="radio" name="mw" placeholder="성별" value="여"> 여자 
                </div>
                <div class="intt_5"><input type="date" name = "birthday" placeholder="생년월일"></div>
                <div class="intt_6"><input type="tel" name="phone" placeholder="연락처"></div>
                <div class="intt_7"><input type="text" name="address" placeholder="주소"></div>
                <div class="intt_8"><input type="email" name="email" placeholder="이메일"></div>
            </div>
        </div>
        <div class="j_finish"><input type="submit" class="finish" value="가입하기"></div>
    </form>
    
</body>
</html>
<!-- <form action="/naver/form_in.php" method="post">
        <input type="hidden" name="no_" value="<?=$no_?>">
        <div>
            <div class="int_1">아이디</div> 
            <div class="intt_1"><input type="text" name="id" placeholder="아이디"></div>
        </div>
        <div>
            <div class="int_2">비밀 번호</div>
            <div class="intt_2"><input type="password" name="pwd" placeholder="비밀번호"></div>
        </div>
        <div>
            <div class="int_3">이  름</div> 
            <div class="intt_3"><input type="text" name="no_name" placeholder="이름"></div>
        </div>
        <div>
            <div class="int_4">성  별</div>
            <div class="intt_4">
                <input type="radio" name="mw" placeholder="성별" value="남"> 남자 
                <input type="radio" name="mw" placeholder="성별" value="여"> 여자 
            </div>
        </div>
        <div>
            <div class="int_5"> 생년월일 </div>
            <div class="intt_5"><input type="date" name = "birthday" placeholder="생년월일"></div>
        </div>
        <div>
            <div class="int_6">연락처</div>
            <div class="intt_6"><input type="tel" name="phone" placeholder="연락처"></div>
        </div>
        <div>
            <div class="int_7">주소</div>
            <div class="intt_7"><input type="text" name="address" placeholder="주소"></div>
        </div>
        <div>
            <div class="int_8">이메일</div>
            <div class="intt_8"><input type="email" name="email" placeholder="이메일"></div>
        </div>
        <input type="submit" class="finish" value="가입하기">
    </form> -->