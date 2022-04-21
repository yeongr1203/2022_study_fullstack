<?php
    include_once "db.php";
    $conn = get_conn();
    $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
    //i_board기준으로 내림차순으로 설정. 필요한 자료만 저렇게 작성해서 가지고 오기.
    // 다 가져오면 메모리만 엄청 씀. 여러명이 사용하는 것이기 때문에 메모리 최소화하기.
    // 쓸때없는 자료까지 다 가져오지 말기.
    $result = mysqli_query($conn, $sql);   // 실행하고 싶은 쿼리문.// 결과물이 담김. 
    // 쿼리문에 select문이 없으면 1아니면 0, 즉, true 또는 false.
    // 셀렉트를 사용한다면 내용(결과값)들을 통으로 result에 줘서 그걸 뽑아서 써야하는데 뽑아쓰는방법이 while문.
    //  while문은 한 줄씩 뽑아서 진행이됨. 한줄이 끝나면 다음 줄... 즉 배열해서 정리해서 넘겨준다. 사용하기 편하라고 배열해서 넘겨줌.
    mysqli_close($conn);    //아래 php다썼으면 닫아주는 용도. 가능한 빨리 닫는게 메모리에 도움이 되므로 여기에 작성함.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <h1>리스트</h1>
    <a href="write.php"><button>글쓰기</button></a> <!--write.php이거 안에 /붙이면 찾을수없음으로 나타남. 고로 /붙이고 안붙이고의 차이가 있음.-->
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))   // 여러줄일 떈 while문.
            {
                $i_board = $row['i_board']; //[]안에 쿼리 결과에 컬럼명을 넣어줘야함.
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>"; // 주소값?i_board의 쿼리까지 불러올수있다
                //  <a href='detail.php?i_board=${i_board}'> = 하이퍼링크 // a태그 안에 위에${i_board} 주소값을 포함하고 있다는 뜻.
                // 20번째 a태그를 클릭하는것만으로도 /board/detail.php?i_board=20 과 같음.
                print "<td>${create_at}</td>";
                print "</tr>";
            }
            // mysqli_fetch_assoc($result) 배열로 정리되어서 $row로 넘어감. 그걸 아래의 내용처럼 한번 회전하고 또 한줄이 끝나면 또 정리가 되어서 또 다음줄...
            // 마지막이 줄이 끝나고 다음으로 넘어가면 값이 변수에 없으니까 false로 더이상 진행하지 않고 빠져나와서 끝낸다.

        ?>
    </table>
</body>
</html>
<!-- 

CRUD중에 R빼고 다 정수.
하지만 셀렉트일때는 정수 아니고 가지고 오는 값자체를 가져옴.

while문을 안 쓸 경우.
    // $row = mysqli_fetch_assoc($result);
    // $row = mysqli_fetch_assoc($result); //와일 문 안쓰면 줄생성해서 나타내고자하는 행만큼 설정.
    // $i_board = $row['i_board'];
    // $title = $row['title'];
    // $create_at = $row['create_at'];
    // print "<tr>";
    // print "<td>${i_board}</td>";
    // print "<td>${title}</td>";
    // print "<td>${create_at}</td>";
    // print "</tr>";


 -->