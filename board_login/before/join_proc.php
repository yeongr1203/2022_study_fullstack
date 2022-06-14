<?php 
    // 아이디, 비밀번호, 이름, 성별 값이 필요함.

    include_once "db/db_user.php"; // 중복된 함수를 줄일 수 있다.
    //join_proc가 있는 경로로 설정해야한다.

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confirm_upw = $_POST["confirm_upw"];
    $nm = $_POST["nm"];
    $gender = $_POST["gender"];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender,
    ];

    $result = ins_user($param);
    // user_join($param) 이걸 뭐라고 하는가?? 함수호출을 했다.
    // = 의 의미는 오른쪽 값을 왼쪽에 복사하여 준다 라는 뜻.
    // 결론 : 함수를 호출한다는 의미는 값을 준다 라는 뜻.
    // 값은 리터럴 값이거나 주소값이거나 둘 중 하나! // 리턴이란 값이 무조건 있어서 얘는 무조건 실행 해야함.
    // $result = user_join($param);이렇게 작성하면, user_join($param) 이게 값이 된다는 것은 리턴 값이 있다는 것.
    // 내장된 함수(php에서 제공)를 불러오거나, 아님 내가 커스텀(만든) 함수를 사용하거나.
    // 내장된 함수는 header와 같은 것들.

    // user_join($param) 이렇게 되는 것은 리턴이라는 키워드가 필수는 아니고 선택. 이렇게 썼다면, return; 이것만 사용가능. 
    // return ; 띄워쓰기도 안됨. 띄어쓰면 값을 가지고 리턴을 되기 때문에, 리턴사용시 리턴; 이렇게 작성해야함.
    
    // 같다 라는 의미는 == 이다.  

    echo "uid : ", $uid, "<br>"; 
    // true & false 둘 중 하나, 0아니면 1, 1넘어오면 값이 나타남. 빈칸 넘어 올 일 없음. 에러터짐.(아직 덜 배워서)
    echo "upw : ", $upw, "<br>";
    echo "comfirm_upw : ", $confirm_upw, "<br>";
    echo "nm : ", $nm, "<br>";
    echo "gender : ", $gender, "<br>";
    
    header("Location: login.php");

    

?>

<!-- 

join_proc 는  join창을 처리해주는 창.

$a= 1;
$b= "1";

$a == $b // 문자열이라도 1이 있어서 true
$a === $b // 이건 타입도 같아야해서 false


// 배열할 때,

$함수명 = [ 배열값 ];
[ 배열값 ]; 또는 arry (); 둘다 가능.






 -->