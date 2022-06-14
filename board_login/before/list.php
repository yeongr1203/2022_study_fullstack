<?php
    include_once 'db/db_board.php';     // list구현 시 불러와서 사용해야함.

    session_start();
    $nm ="";    // 중괄호 안에 있으면 그 안에서만 살아있음. 하지만 php는 살아있지만 적는걸 습관화하기 위해 작성하기!
    // 리스트 만들때 먼저 작성.
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user['nm'];
    }
    // 값을 포스트 겟 방식으로 다들 보내는데, 보내진 값들을 배열로 받아서 변수로 저장해주고, 그 저장된 배열에 값을 불러서 사용함.
    // isset() 함수 = 해당변수가 등록되어 있는지 확인을 할 수 있다.
    // isset($_SESSION['변수명']) 형태 = 만약 해당변수가 등록이 되어 있다면 true, 아니면 fasle.
    
    // 페이징 2   
    $page = 1;  //디폴드값은 1로 함.
    // 쿼리스트링은 숫자로 나오더라도 무조건 문자열로 받아짐.
    // 무조건 페이지가 1이 나오도록 함.
    if(isset($_GET["page"])) {  
        $page = intval($_GET["page"]);  // intval을 해서 정수형으로 바꿈.
    }   // intval은 강제 변경하는 것이다.
    
    // if문 작성내용에서 만약 쿼리스트링이 없다면 에러가 터질 것이다.
    // print "<div>page:{$page}</div>";    //화면 제일 상단에 page:2(2는 페이지수) 가 나오는지 확인. 잘 받아지는지 확인.

    // 서치(검색)창
    $search_txt = "";
    if(isset($_GET["search_txt"])) {
        $search_txt = $_GET["search_txt"];
    }
    // print "search_txt : {$search_txt}"; // 페이지 서치 몇페이지인지 확인하는 것.(페이지 받아지는지 확인할때만 쓰면 됨.)

    $row_count = 10; //페이지당 보여줘야할 값을 5로 함.
    $param = [
        "s_idx" => ($page-1) * $row_count,  // limit의 인덱스 값
        "row_count" => $row_count,           // limit의 두번째 값
        "search_txt" => $search_txt         // 
    ];
    // 페이징 1
    $paging_count = sel_paging_count($param);    // cnt의 결과값을 가지고 있는 함수를 가져옴.

    // 리스트 구현.
    $list = sel_board_list($param);   //목록을 불러오는 것.  
    
    // 서치
    /*
        검색하고자 하는 문구가 들어가는 모든 글을 찾을 수 있어야함.
        SELECT * FROM t_board WHERE title LIKE '%교수%';
    */

    // // 이건 새로운 선생님.
    // // 검색창
    // if(isset($_POST['search_input_txt']) && $_POST['search_input_txt'] != "" ) {  // 검색창에 검색어가 있냐? && 검색창이 (비었을때)빈문자열이다.
    //     $param = [                                                              // $param += 설명 : 배열과 배열을 플러스하면 이어진다는 뜻인다. 아래의 값을 이어줌.
    //         "search_select" => $_POST["search_select"],                          // select박스 value값
    //         "search_input_txt" => $_POST["search_input_txt"]                     //검색어
    //     ];
    //     //DB조회, 전달 후 결과 list를 받아온다.
    //      $list = search_board($param);                                           //선 작성 => search_board는 없는데, 만들어서 사용.
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <!-- href 여기 경로는 다운로드가 되는 주소값을 작성해줘야함. -->
    <!-- href="/common.css" 앞에 / 붙이면 localhost/common.css 가 경로가 됨. 앞에 폴더는 싹다 사라지고 폴더 안이 아니라 밖에 있을때를 뜻함. 위치상으로index.html이 있는 곳에 있어야함. -->
    <!-- 경로에서 board_login은 1차 주소값. -->
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? "<div>" . $nm . "님 환영합니다.</div>" : "" ?>
            <div>
                <a href="list.php">리스트</a>
                <?php if(isset($_SESSION["login_user"])) { ?>
                        <a href="write.php">글쓰기</a>
                        <a href='logout.php'>로그아웃</a>
                <?php } else { ?>
                    <a href='login.php'>로그인</a>
                <?php } ?>
            </div>        
        </header>
        <main>
            <h1>리스트</h1>
            <!-- 글번호, 제목, 작성자명, 등록일시 (테이블) -->
            <div>
                <form action="list.php" method="get">
                    <div>
                        <input type="search" name="search_txt" value="<?=$search_txt?>">
                        <input type="submit" value="검색">
                    </div>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>번    호</th>
                        <th>제    목</th>
                        <th>작 성 자</th>
                        <th>등록일시</th>
                    </tr>
                </thead> <!-- thead , tbody 꼭 안해도 됨. 빼도 됨. -->
                <tbody>
                    <?php foreach($list as $item) { ?>
                        <tr>
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>&page=<?=$page?>$search_txt=<?= $search_txt !== "" ? "&search_txt=" . $search_txt : "" ?>"><?=str_replace($search_txt,"<mark>{$search_txt}</mark>", $item["title"])?></a></td>
                            <!-- if($search_txt == "") { echo $item["title"]; } else { echo str_replace($search_txt, "<mark>".$search_txt."</mark>", $item["title"] );  -->
                            <td><?=$item["nm"]?></td>
                            <td><?=$item["created_at"]?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- 검색기능 // 새로운 선생님-->
            <!-- 
            <form action="list.php" method="POST">
            <div>
                <select name="search_select">
                    <option value="search_writer">작성자</option>
                    <option value="search_title">제목</option>
                    <option value="search_ctnt">제목+내용</option>
                </select>
                <div>
                    <input type="text" name="search_input_txt">
                    <input type="submit" value="검색">
                </div>
            </div>
            </form>
             -->
            <div>
            <?php for($i=1; $i<=$paging_count; $i++) { ?>   <!-- 1번작성 -->
                <span class="<?=$i === $page ? "selected_page" : ""?>">
                    <a href="list.php?page=<?=$i?><?=$search_txt !== "" ? "&search_txt=".$search_txt : ""?>"><?=$i?></a>    <!-- a태그 안에 3항식은 빈칸이 아니거나, 값이 있을때 쿼리스트링을 나타내겠다는 말.즉, 검색하지 않을때는 쿼리스트링을 변경하지 않겠다는 뜻. -->
                </span>
                <!-- span태그에 선택된 page의 색상이 변경되도록 class에 css를 줬음. -->
                <!-- <span><a class="selected_page" href="list.php?page=php형식?$i?">?=$i?</a></span> 2번 작성 내용 => (쿼리스트링으로 쓸것.) list.php에 내가 몇페이지가 보고싶은지 알려줄것이다. 결과 : page=$i 가 뜨도록 하기. 페이지는 변경되지만 화면은 변하지 않음. -->
                <!-- a태그에 바로 class주면 전체색이 변경됨 -->
            <?php } ?>
            <!--                 
                결과물이 아래처럼 찍히도록
                <span><a href="list.php">1</a></span>
                <span><a href="list.php">2</a></span>
                ...
                <span><a href="list.php">페이징숫자까지</a></span>
             -->
            </div>
        </main>
    </div>
</body>
</html>
<!-- 
    로그인 해서 로그아웃이 생기게 했을때, 작업은 
            <header>
            php : isset($_SESSION["login_user"]) ? "<div>" . $nm . "님 환영합니다.</div>" : "" ?>
        <div>
            <a href="list.php">리스트</a>
            <a href="write.php">글쓰기</a>
            php:
                isset($_SESSION["login_user"]) 
                ? "<a href='logout.php'>로그아웃</a>" 
                : "<a href='login.php'>로그인</a>" 
            ?>

        </div>        
        </header>

// 아래 이건 수정본 이유
조건이 1개일때는 3항식이 나음.
2개이상일때는, if문 안에 써주기

// 아래 내가 한 것.

    include_once 'db/db_board.php';
    $result = sel_board_list($param);   // 함수호출
    while($row = mysqli_fetch_assoc($result)){ // 함수사용
        $i_board = $row['i_board'];
        $title = $row['title'];
        $uid = $row['uid'];
        $created_at = $row['created_at'];
        print "<tr>"; 
        print "<td>${i_board}</td>";
        print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
        print "<td>${uid}</td>";
        print "<td>${created_at}</td>";
        print "</tr>";
        }


 -->