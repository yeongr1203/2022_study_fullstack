<?php
include_once 'db.php';  // 필요한 데이터 베이스 가져오기.

$i_board = $_GET['i_board']; // i_board 값을 겟방식으로 변수값으로 줘서 불러옴.
$sql = " DELETE FROM t_board WHERE i_board = $i_board ";    // i_board에서 지우려 한다.

$conn = get_conn(); // db와 연결.
$result = mysqli_query($conn, $sql);   // (연결시키고싶은정보, 사용하려는 쿼리) 를 사용한 결과 값.   
mysqli_close($conn);                // 실행한 정보 닫기
header("Location: list.php");   // 페이지 이동.

// 내가 쓴 글 = 디테일 안에 보통 삭제 버튼이 따로 들어감. 화면은 따로 없고, 로직만 있음.
// 만약 따로 삭제가 없다면 리스트쪽에 선택버튼을 만들어주고 삭제를 추가해줘야함.

?>