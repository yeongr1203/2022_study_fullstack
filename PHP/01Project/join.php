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
    <form action="join.php" method="POST">
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
            <select name="yy"></select>
            <select name="mm"></select>
            <select name="dd"></select>
        </div>
        <div>
            <div>주소</div>
            <input type="text" name="addr" placeholder="주소">
        </div>
        <div>
            <div>이메일</div>
            <input type="text" name="email" placeholder="이메일">
        </div>
        <div>
            <input type="submit" value="회원가입">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>