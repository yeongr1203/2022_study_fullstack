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
    </style>
</head>
<body>
<div class="container">
  <div class="row"> <!-- row는 행. //반드시  -->
    <div class="col"> <!-- col 은 컬럼. col만 작성시 무조건 같은 크기만 가져간다. -->
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>
</body>
</html>

<!-- 

가로 컬럼은 항상 총 12개. => 디자이너마다 차이가 있지만 보통 12그리드를 사용함.
거기서 각 컬럼을 일정하게 나눠준다.(컬럼과 컬럼 사이에 거터이라는게 있는데, 그걸로 서로 비율을 맞춰줌. )
하지만 컬럼사이에 거터가 있으므로 각 컬럼사이 공간이 있다고 생각하면 됨.
거터의 너비는 => 1.5rem (좌우로 각각 .75rem)




 -->