<!-- 쿼리스트링 주소를  http://localhost/bootstrap 여기까지만 적어도 아팟치 서버에서 알아서 index.php를 찾아줌. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <title>부트스트랩_css그리드</title>
  <style>
    .img-fluid { max-width: 100%; height: auto;}
    /* 직접 css를 작업해야하지만, 정의된 클래스이름으로 css작업을 할 수 있다. */
  </style>
</head>

<body>
  <div class="container">
    <img src="https://img.sbs.co.kr/newimg/news/20211029/201605033.jpg" class="img-fulid" alt="">
    <hr> <!-- hr 태그는 줄태그 // 내가 구분하기 힘들어서 구분위해서 넣어줬음.-->
    <img src="https://t1.daumcdn.net/cfile/tistory/2408DD3658A648B12C" class="img-thumbnail" alt="">
    <hr>
    <img src="https://t1.daumcdn.net/cfile/tistory/2408DD3658A648B12C" class="rounded" alt="">
    <hr>
    <!-- 아래의 모든 이미지는 중앙정렬 -->
    <div style="display:flex; justify-content:center!important;">
      <!-- mx-auto는 img태그가 인라인이기때문에  d-block을 줘야 먹힌다. => 중앙정렬 -->
      <img src="https://img.animalplanet.co.kr/news/2020/07/15/700/e05t9x1o0e3trklpwrr3.jpg" class="rounded d-block mx-auto">
    </div>
    <hr>
    <div class="d-flex justify-content-center">
      <img src="https://img.animalplanet.co.kr/news/2020/07/15/700/e05t9x1o0e3trklpwrr3.jpg" class="rounded">
    </div>
    <hr>
    <div style="text-align: center;">
      <img src="https://img.animalplanet.co.kr/news/2020/07/15/700/e05t9x1o0e3trklpwrr3.jpg" class="rounded">
    </div>
    <hr>
    <div class="text-center">
      <!-- text-center는 이미 중앙정렬이므로 img에 블락태그 주지 말 것. -->
      <img src="https://img.animalplanet.co.kr/news/2020/07/15/700/e05t9x1o0e3trklpwrr3.jpg" class="rounded">
    </div>
  </div>

</body>

</html>