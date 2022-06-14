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
    <style>
        .container { background-color: blue; color:aliceblue;}
        .container-sm { background-color: red; color:aliceblue;}
        .container-md { background-color: yellow; }
        .container-lg { background-color: teal; color:aliceblue;}
        .container-xl { background-color: pink; color:aliceblue;}
        .container-xxl { background-color: purple; color:aliceblue;}
        .container-fluid { background-color: tan; }
    </style>
</head>
<body>
    <div class="container">100% xsm</div> <!-- 기호 없던 애 -->
    <div class="container-sm">100% wide until small breakpoint 576px</div>
    <div class="container-md">100% wide until medium breakpoint 768px</div>
    <div class="container-lg">100% wide until large breakpoint 992px</div>
    <div class="container-xl">100% wide until extra large breakpoint 1200px</div>
    <div class="container-xxl">100% wide until extra extra large breakpoint 1400px</div>
    <div class="container-fluid">영역표시 없이 전체사용</div>
</body>
</html>