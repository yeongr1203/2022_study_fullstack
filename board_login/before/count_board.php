<?php
    include_once 'db/db.php';
    // DB와 커넥션 시도하여 connection객체 얻어오기
    $connection = get_conn();

    // 오늘 날짜 정보를 가져옴.
    $YY = date('Y');    // 년
    $MM = date('m');    // 월
    $DD = date('d');    // 일

    //2014-06-15
    $dat = $YY."-".$MM."-".$DD;
    // 오늘 날짜 정보를 DB에서 조회한다.
    $sql = " SELECT * FROM count_db WHERE redate = '$dat'";
    // 쿼리전송
    $result = mysqli_query($connection, $sql);
    // 결과 집합을 받아온다.
    $list = mysqli_num_rows($result);

    if(!$list) {    // 아무도 들어온 적이 없어서 date정보가 없을 경우.
        $count = 0; // count = 0
    } else {        // 누군가 들어온 적이 있어서 date정보가 존재할 경우.
        $row = mysqli_fetch_array($result); // array나 assoc나 둘다 사용가능.
        $count = $row['count']; // 현재 날짜의 count값을 가져온다.
    }

    if($count === 0) {
        $count++;       // 카운트 1씩 증가시킨다.
        // 오늘 날짜로 새로운 count 값을 추가한다.
        $sql = "INSERT INTO count_db VALUES ($count, '$dat')";  // 모든 속성의 값을 다 넣을 경우 into다음에 안적어줘야한다. 
        // count는 숫자정보라 감싸주지 않아도 되지만, dat는 문자열이기때문에 ''감싸준다.
    } else {
        $count++;
        //오늘 날짜의 기존 count 값을 변경시킨다.
        $sql = " UPDATE count_db SET count = $count WHERE redate='$dat' ";
        // redate는 오늘날짜.
    }

    mysqli_query($connection, $sql);
    
    //Total 조회수. - 모든 count 값을 sum()적용.
    $totalQuery = " SELECT SUM(count) FROM count_db ";
    $totalCount = mysqli_fetch_array(mysqli_query($connection, $totalQuery))[0];
    //$totalCount = mysqli_fetch_assoc(mysqli_query($connection, $totalQuery))['sum(count)'];
    // 주석처리 한 방법은 array가 아닌 assoc로 작업했고, 뒤에 [0]이 아닌 sum(count) 로 작성.

    // array = 배열, 가져올 키 값을 인덱스 번호도 가지고 올수 있음.
    //assoc = 연관배열, 튜플형식, 키와 값을 가져오려면 키를 가지고 와야함.

    mysqli_close($connection);

    echo "<br><center><h2> 방문자 수 통계입니다. </h2><hr>";
    echo "[ Today : <font color = red>";
    echo $count;   //오늘날짜방문자수
    echo "</font> ] <br>";

    echo "[ Total : <font color = blue>";
    echo $totalCount;   //총 방문자수
    echo "</font> ] <br>"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>방문자수 통계</title>
</head>
<body>
    
</body>
</html>
<!-- 
    사용하는것 => 
    db, date


 -->