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
    body {
      padding-bottom: 10px;
    }

    .row {
      background-color: rgb(39, 41, 43, 0.03);
      border: 1px solid rgb(39, 41, 43, 0.1);
    }

    .row>.col,
    .row>.col-sm-3,
    .row>.col-8 {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      background-color: rgb(39, 41, 43, 0.03);
      border: 1px solid rgb(39, 41, 43, 0.1);
    }
  </style>
</head>

<body>
  <div class="container">
    <hr>
    <div class="row row-cols-4">
      <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="col">Column</div>
    </div>
    <div class="row row-cols-auto">
      <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="col">Column</div>
    </div>

    <hr>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="col">Column</div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-3">
        Level 1: .col-sm-3
      </div>
      <div class="col-sm-9">
        <div class="row">
          <div class="col-8 col-sm-6">
            Level 2: .col-8 .col-sm-6
          </div>
          <div class="col-4 col-sm-6">
            Level 2: .col-4 .col-sm-6
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- 열분할 / sm크기 이하일때는 상관없지만 sm크기 이상일때 컬럼을 둘둘 나누고 싶을때 강제로 개행 시키는 방법. -->
    <div class="row">
      <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
      <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

      <!-- Force next columns to break to new line -->
      <div class="w-100"></div>
      <!-- div에 클래스 없이 줘도 동일함. 왜냐면 블락태그라 끊어지고 다음줄로 연결됨. 하지만 div클래스주는게 FM이기떄문에 써주기 -->

      <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
      <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
    </div>
    <hr>
    <!-- 디스플레이 none이었던 친구가 block으로 바뀌면서 개행이 되기도 함. -->
    <div class="row">
      <div class="col-6 col-sm-3">.col-6 .col-sm-4</div>
      <div class="col-6 col-sm-3">.col-6 .col-sm-4</div>
      <!-- d-none은 div자체가 없을때와 같음. 즉, md였을때 display:none을 block으로 바꾸는것. -->
      <!-- Force next columns to break to new line at md breakpoint and up -->
      <div class="w-100 d-none d-md-block"></div>

      <div class="col-6 col-sm-3">.col-6 .col-sm-4</div>
      <div class="col-6 col-sm-3">.col-6 .col-sm-4</div>
    </div>
    <hr>
    <!-- 재졍렬 / 정렬클래스 -->
    <div class="row">
      <div class="col">
        First in DOM, no order applied
      </div>
      <div class="col order-5">
        Second in DOM, with a larger order
      </div>
      <div class="col order-1">
        Third in DOM, with an order of 1
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4">.col-md-4</div>
      <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
      <!-- .offset-md-4 을 줘서 왼쪽에 4칸을 띄우고 거기서부터 영역차지함 -->
    </div>
    <hr>
    <!-- offset class -->
    <div class="row">
      <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
      <!-- 왼쪽 3칸비우고 3칸사용 하기때문에 혼자서 6칸 차지함 -->
      <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
    </div>
    <hr>
    <!-- offset class 2 -->
    <div class="row">
      <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
      <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0</div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
      <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0</div>
    </div>
  </div>
</body>

</html>

<!-- 




 -->