<!-- 쿼리스트링 주소를  http://localhost/bootstrap 여기까지만 적어도 아팟치 서버에서 알아서 index.php를 찾아줌. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 아래 3줄만 넣으면 부트스트랩을 쓸 수 있는 환경은 만들어짐. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- 자바스크립트 / 원래는 body 맨 밑에 위치. 하지만 defer를 입력해서 제일 마지막에 실행되도록 했기 때문에 여기에 넣어도 상관 없다.-->
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>부트스트랩</title>
</head>

<body>
    <div class="container">
        <form>
            <div class="mb-3">
                <!-- label과 input을 연결시킬때, for="exampleInputEmail1" / id="exampleInputEmail1" 적어서 연결시켜줌.   -->
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- input 타입을 form-control을 해서 인라인으로 변경시켜버림. 그래서 label이 되도록 함. -->
                <!-- aria-describedby="emailHelp" 폼텍스트를 작성할 때 쓰는 것. -->
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <!-- input에 aria-describedby="emailHelp" 적으면 div에 id="emailHelp" 적어 이게 무엇인지 알 수 있게 하는 것. -->
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- class에서 btn-secondary 로 바꾸면 색이 변경됨. -->
        </form>
    </div>
</body>

</html>