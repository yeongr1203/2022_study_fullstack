<?php
    include_once 'db.php';

    $i_board = $_GET['i_board'];                                // i_board의 값을 가져와서 변수로 적용
    $sql = " SELECT * FROM t_board WHERE i_board = $i_board ";  // $i_board를 가져와서 쿼리를 만듬 
                                                                // 키값을 넣었을때 가져올수 있는 경우의 수는 2개, 왜냐면 가져올수있고, 아닐수있어서 . 키값을 준 애를 가져오고 안가져오고 그래서 2개의 경우의 수.

    $conn = get_conn();                     // 실행하자마자
    $result = mysqli_query($conn, $sql);    // 가져오고
    mysqli_close($conn);                    // 바로 닫기

    if($row = mysqli_fetch_assoc($result))  // 1개 가져올땐, if문 사용. 왜냐면 else문으로 0일때를 확인이 가능해서.
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>    
<body>
    <a href="list.php"><button>리스트</button></a>
    <a href="del_proc.php?i_board=<?= $i_board ?>"><button>삭제</button></a>    <!--삭제링크-->
    <!-- html안이라서 php앞 시작과 뒤를 적어줘야함.  -->
    <a href="mod.php?i_board=<?= $i_board ?>"><button>수정</button></a>
    <div>제목 : <?= $title ?></div>
    <div>작성일시 : <?= $create_at ?></div>
    <div>내용 : <?= $ctnt ?></div>
</body>
</html>

<!-- 

< ?= $title ? > : html(문자열로 만들때)사용 
이것을 축약형이라 하는데, 축약형으로 사용할 수 있다.

$result 이 값을 보려고 print_r 한다면 주소값만 보이지 내용은 보이지 않는다.
보려고 한다면 결국 함수사용해서 한번 돌아야 출력이 됨.
만약 print_r을 써서 출력이 되었다면 그건 어디서 함수로 돌고 와서 나타난것.

<a href="del_proc.php"><button>삭제</button></a> 에서 del_proc.php 이렇게 적으면 안되는 이유.
어떤 메소드 좀 삭제시켜줘~ 라고 알려줘야함.
= 리스트 안에 a태그 안 내용을 적어둔것 처럼 어디의 어디껄 삭제시켜달라고 알려줘야함.




-->
