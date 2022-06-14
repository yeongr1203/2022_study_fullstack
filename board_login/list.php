<?php   
    include_once "db/db_board.php";

    session_start();
    $nm = "";

    $page = 1;
    if(isset($_GET["page"])) {       
        $page = intval($_GET["page"]);
    }     
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
    $row_count = 20;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count
    ];
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? "<div>". $nm . "님 환영합니다.</div>" : "" ?>
            <div>
                <a href="list.php">리스트</a>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="write.php">글쓰기</a>
                    <a href="logout.php">로그아웃</a>
                    <a href="profile.php">
                        프로필
                        <?php
                            $session_img = $_SESSION["login_user"]["profile_img"];
                            $profile_img = $session_img == null ? "basic.png" : $_SESSION["login_user"]["i_user"] . "/" .$session_img;
                        ?>
                        <div class="circular__img wh40">
                            <img src="/board_login/img/profile/<?=$profile_img?>" width="80">
                        </div>
                    </a>
                <?php } else { ?>
                    <a href="login.php">로그인</a>
                <?php } ?>                
            </div>
        </header>
        <main>
            <h1>리스트</h1>
            <table>
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>글쓴이</th>
                        <th>등록일시</th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php foreach($list as $item) { ?>
                        <tr>
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                            <td>
                                <?=$item["nm"]?>
                                <?php
                                    $session_img = $item["profile_img"];    // 1번
                                    $profile_img = $session_img == null ? "basic.png" : $item["i_user"] . "/" .$session_img;    //2번
                                ?>
                                <div class="circular__img wh40">
                                    <img src="/board_login/img/profile/<?=$profile_img?>" width="80">
                                </div>
                                <!-- 
                                1번 : $_SESSION["login_user"]["profile_img"] 이 아닌 $item["profile_img"] 이 된 이유.
                                      세션이 필요한 게 아닌, foreach문을 각 row값을 $item으로 줬기때문에,  i_user값을 가지고 있으므로, 
                                      session이 아닌 $item 의 프로필이 필요한 것이기 때문에 프로필이미지를 세션_이미지로 줬고,
                                2번 : 프로필 이미지는 세션_이미지가 null일 때, basic.png 이미지를 나타내라. 아닐경우
                                      item의 i_user에 맞는 세션_이미지를 가지고 와라.

                                -->
                            </td>
                            <td><?=$item["created_at"]?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div>
            <?php for($i=1; $i<=$paging_count; $i++) { ?>
                <span class="<?=$i===$page ? "pageSelected" : ""?>">
                    <a href="list.php?page=<?=$i?>"><?=$i?></a>
                </span>
            <?php } ?>
            </div>
        </main>
    </div>
</body>
</html>