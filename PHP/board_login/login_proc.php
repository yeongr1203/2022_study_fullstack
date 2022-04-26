<?php
    include_once "db/db_user.php";
    //login.php에서 넘어오는 값을 적절한 변수에 담는다.
    // 변수의 값을 출력.
    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    // echo "uid : ", $uid , "<br>";
    // echo "upw : ", $upw , "<br>";
    // 이건 값이 나오는지 확인한것.

    $param = [
        "uid" => $uid   // "키" => $값
    ];
    // 왜 배열화해서 보냈는가?
    // function sel_user(&$param) 이 선언부가 가져오려는 값들이 여러개가 된다면 &$param 이걸 계속 추가 해줘야하는데,
    // 선언부는 고정이어야 하기 때문에, 따로 이렇게 배열을 해서 편하게 처리함.
    // 결론은 선언부에서 함수 하나면 설정해서, 하나에서 여러개값을 담을 수 있기때문에 수정에도 편리함.

    $result = sel_user($param);
    // if(empty($result)) {
    //     echo "해당하는 아이디 없음";
    //     exit; // 또는 die;
    // }
    // echo "i_user : " , $result["i_user"], "<br>";
    // echo "pw : " , $result["upw"], "<br>";   

    // 비밀번호가 맞으면 "list.php"로 주소 이동
    // 비밀번호가 다르면 "login.php"로 주소 이동
    // 비밀번호 앞에 (만약에)가 숨어져있음. ~면 이면 if문, 그리고 조건식이 필요함.    
    if ( $result["upw"] === $upw || empty($result)) {    // 로그인 성공!!
        session_start();
        $_SESSION["login_user"] = $result;  
        header("location: list.php");
   }else {
         header("location: login.php");
    }
    // empty는 빈칸을 뜻하고, 이것을 빈칸일때 true가 된다. 그래서 아래 출력, 그리고 다이를 만나서 종료가 된다. 다이를 만나서 바로 종료가 되어서 밑에 실행을 하지 않음.
    // 이프를 지났다면 비어있지는 않다는 뜻. 
    // $_SESSION은 브라우저를 켜서 사용하는 동안 계속 켜져있음. 그래서 창을 껏다가 켜야 닫힘.
    // $result는 배열, 배열을 복사해서 $_SESSION["login_user"]에 줬다.
    // db_user에서 SELECT i_user, uid, upw, nm, gender 값을 result로 줬는데 그 값을 배열로 두고 세션에 넘겨준 것.


    ?>
<!-- 

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    이건 아까 로긴파일에서 네임으로 구분한 것을 포스트로 보냈기때문에 포스트방식으로 받아옴.

    // 배열이란?
    변수 하나에는 한개의 값만 저장이 된다. 대신 값이 타입이 종류가 있다.
    이 종류는 크게 2가지만 알면됨.
    1. 리터럴(값자체를 리터럴이라 생각하면됨.) 예) 1이면 1, 홍길동은 홍길동
    2. 주소값 = 값은 1개, 그 주소로 찾아가보면 어마어마하게 있을 수 있다.
        배열은 주소값이 저장되는 친구, 주소값으로 들어가면 여러개 값이 있을 수있다.
        배열은 여러 개 값을 묶어서 담아놓을 수 있는 쟁반같은 친구!




-->