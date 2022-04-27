<?php
// 삭제 성공 시 php로 이동
include_once "db/db_board.php";
session_start();                        // 먼저 시작해주고, 
$login_user = $_SESSION["login_user"];
$i_board = $_GET["i_board"];        // 1번) 작성 후 db로 이동. db작성 후 넘어옴.
$i_user = $login_user["i_user"];
$param = [
    "i_board" => $i_board,
    "i_user" => $i_user,
];

$result = del_board($param);
if($result) {
    header("location: list.php");
}
?>