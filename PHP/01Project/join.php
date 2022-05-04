<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>식물더하기</title>
</head>
<body>
    <!-- <a href="main.php"><img src="" alt="메인으로 돌아가기"></a></div> -->
    <a href="main.php"><button>홈으로</button></a>
    <a href="login.php"><button>로그인</button></a>
    <form action="join_proc.php" method="POST">
        <div>
            <div>아이디</div>
            <input type="text" name="uid" placeholder="아이디">
        </div>
        <div>
            <div>비밀번호</div>
            <input type="password" name="upw" placeholder="비밀번호">
        </div>
        <div>
            <div>비밀번호확인</div>
            <input type="password" name="confirm_upw" placeholder="비밀번호확인"></div>
        <div>
            <div>이름</div>
            <input type="text" name="nm" placeholder="이름">
        </div>
        <div>
            <div>닉네임</div>
            <input type="text" name="unick" placeholder="닉네임">
        </div>
        <div> 성별 : <label> 여자<input type="radio" name="gender" value="0"></label>
                     <label> 남자<input type="radio" name="gender" value="1"></label>
        </div>
        <div>
            <div>생년월일</div>
            <select name="yy">
                <option value="" seleted>-- 연도 --</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
            </select>
            <select name="mm">
                <option value="" seleted>-- 월 --</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <select name="dd">
                <option value="" seleted>-- 일 --</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
        </div>
        <div>
            <div>연락처</div>
            <input type="tel" name="uphone" placeholder="연락처">
        </div>
        <div>
            <div>주소</div>
            <input type="text" name="addr" placeholder="주소">
        </div>
        <div>
            <div>이메일</div>
            <input type="email" name="email" placeholder="이메일">
        </div>
        <div>
            <input type="submit" value="회원가입">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>