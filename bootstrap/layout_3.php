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
        .container { background-color: palegoldenrod; }
        .col-lg-2 {background-color: plum;}
        .col-md-auto {background-color: aqua;}
    </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-md-center"> <!-- md였을때, -->
      <div class="col col-lg-2">
        1 of 3
      </div>
      <div class="col-md-auto">
        <!-- 얘는 col이 없음. 만약 class명 앞에 col 을 써준다면 바로 컬럼 3개로 변경됨 -->
        Variable width content
      </div>
      <div class="col col-lg-2">
        3 of 3
      </div>
    </div>
    <div class="row">
      <div class="col">
        1 of 3
      </div>
      <div class="col-md-auto">
        Variable width content
      </div>
      <div class="col col-lg-2">
        3 of 3
      </div>
    </div>
  </div>
</body>
</html>

<!-- 

만약 부트스트랩에서 auto가 들어가면 자기가 필요한 만큼만 영역을 차지함. 즉 inline과 같다고 생각하면 됨.
col 일경우와 그 옆에는 또 사이즈별로 내가 가질 영역을 따로 설정할 수 있다. 뒤에 또 사이즈별 값을 표시한다면,
앞에 col영역은 죽고 뒤에 적은 사이즈별 값이 우선순위가 되어 나타난다.


 -->