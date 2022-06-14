<?php

    include_once 'db/db_board.php';
    session_start();
    $login_user = $_SESSION["login_user"];  // 로긴프록에 로그인했을때, 해서 배열로 넣어줬기때문에 불러옴.
    
    $i_board = $_GET['i_board'];
    $page = $_GET["page"];          // 선택한 글이 있던 페이지로 넘길때 사용됨.
    // 자바스크립트로 뒤로가기를 구현하면 더 쉬움.
    $search_txt = $_GET["search_txt"];
    $param = [
        "i_board" => $i_board
        // "i_board" => $_GET['i_board'] 도 가능. 대신 위에  $i_board = $_GET['i_board']; 지워야 함.
    ];

    // 3번 (리턴값이 mysqli_fetch_assoc($result)일 때만 가능.)
    $i_user = sel_board($param)['i_user'];
    $title = sel_board($param)['title'];
    $nm = sel_board($param)['nm'];
    $created_at = sel_board($param)['created_at'];
    $ctnt = sel_board($param)['ctnt'];

    // 방법 1 (리턴값이 그냥 $result일 때만 가능.)
    // $result = sel_board($param);
    // while ($row=mysqli_fetch_assoc($result))
    // {
    //     $i_user = $row['i_user'];
    //     $title = $row['title'];
    //     $nm = $row['nm'];
    //     $created_at = $row['created_at'];
    //     $ctnt = $row['ctnt'];
    // }

    //2번(리턴값이 mysqli_fetch_assoc($result)일 때만 가능.)
    // $result = sel_board($param);
    // $i_user = $result['i_user'];
    // $title = $result['title'];
    // $nm = $result['nm'];
    // $created_at = $result['created_at'];
    // $ctnt = $result['ctnt'];
    
    
    // 리스트에서 글이 있던 페이지로 다시 되돌아갈때, 작성함.   
    // => $param 위에 작성.
    // $page = $_GET["page"];  
    //페이지를 쿼리스트링으로 나타내야하므로 겟방식으로 받아오기
    // 쿼리스트링으로 보내는 이유는 받으라는 이야기, 그래서 쿼리스트링으로 받는것.

    $search_txt = "";
    if(isset($_GET["search_txt"])) {
        $search_txt = $_GET["search_txt"];
    }  
    $item = sel_board($param);

    // $check_search = str_replace($search_txt, "<mark>".$search_txt."</mark>", $item["title"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <div><a href="list.php?page=<?=$page?><?= $search_txt !== "" ? "search_txt=".$search_txt : "" ?>">리스트</a></div>
    <!-- <div><a href="list.php?search_txt=php함수$search_txt닫기&page=<?=$page?>">리스트</a></div> -->
    <?php if($login_user["i_user"] === $i_user) { ?>
        <!-- if(isset) 을 쓴건 로그인(true)이 됐다면 && 뒤에 실행, i_user의 값(로그인한 사람)과 데이터베이스에서 가져온 값(글쓴이 pk값)이 같다면 아래 div가 마크업(찍는다)한다. 하나라도 false가 뜨면 찍히지 않는다. --> 
    <div>
        <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
        <button onclick="isDel();">삭제</button> 
        <!-- isDel(); 함수 호출 부분 -->
        <!-- <a href="del.php"><button>삭제</button></a>  자바스크립트 사용시 a태그 삭제-->
    </div>
    <?php } ?>
    <div>제    목 : <?=str_replace($search_txt, "<mark>{$search_txt}</mark>", $item["title"])?></div>
    <div>글 쓴 이 : <?=$nm?></div>
    <div>등록일시 : <?=$created_at?></div>
    <div>내   용 : <?=$ctnt?></div>

    <script>
        // 아래는 함수정의 부분.
        function isDel() {
            // 1번 방법
            // console.log('isDel 실행됨!!');  // 1번작성.
            // const result = confirm('삭제하시겠습니까?');   //2번작성.
            // // confirm()확인을 누르면 true를 리턴 시키기 때문에 앞에 = 이 필요하고, 
            // // console.log(result); true의 값을 콘솔로 확인하면 확인을 누르면 true, false는 취소눌렀을때.
            // // const 앞에 선언하고는 수정이 불가능함. 함수를 실행중에는 true, false 를 변경할 수 없다.
            // if(result){
            //     console.log('삭제할게요');
            // } else {
            //     console.log('취소할게요');
            // }   
            // //if문은 true, false로 나뉜다.
            // //console..(), confirm() = 함수.
            
            //2번방법.
            console.log('isDel 실행됨!!');
            if(confirm('삭제하시겠습니까?')){
              location.href = "del.php?i_board=<?=$i_board?>";
            }   
        }
    </script>
</body>
</html>
<!-- 

while 은 한 줄씩 주는 변수명 에 덩어리변수.
foreach는 덩어리로 주는 변수 as  줄로 주는 변수명

 -->
 <!-- 
    자바스크립트
    부팅, 종료, 이것을 클릭했을때 == 이벤트라고 함. 발생되기전에 이미 기다리고 있음.
    클릭시 실행하겠다를 연결을 시킬수있는데, 클릭했을때 어떤 함수를 실행하겠다하면 연결시켜주는
    것을 이벤트실행이라고 하고, onclick을 사용해서 함.
    이렇게 정의 부분과 호출부분을 연결 한 것을 바운딩을 시켜줬다!! 라고 함.

  -->