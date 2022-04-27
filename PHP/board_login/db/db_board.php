<?php

    include_once 'db.php';

    // 글쓰기
    function ins_board($param){
        $i_user = $param['i_user'];
        $title = $param['title'];
        $ctnt = $param['ctnt'];
    
        $conn = get_conn();
        $sql = 
        "   INSERT INTO t_board
            (i_user, title, ctnt)
            VALUES 
            ('$i_user','$title','$ctnt')    
        ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        return $result;
    }

    // list
    function sel_board_list(){        
        $sql = 
        "   SELECT A.i_board, A.title, A.i_user, A.created_at,
                    B.nm
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            ORDER BY A.i_board DESC
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    //디테일
    function sel_board($param){
        $i_board = $param['i_board'];

        $conn = get_conn();
        $sql =
        "   SELECT A.i_board, A.title, A.created_at, A.ctnt, B.nm, B.i_user
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            WHERE A.i_board = $i_board            
        ";
        // t_board에 있는 i_board 값이 내가 가지고 있는 i_board 와 같은 값인 아이를 찾아야함!
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        // return $result;
        return mysqli_fetch_assoc($result);
    }
    // 이렇게도 작성이 가능.
    //         $sql = 
    //         "  
    //              SELECT t_board.i_board, t_board.title, t_board.i_user, t_board.created_at, t_user.uid
    //              FROM t_board
    //              INNER JOIN t_user ON t_board.i_user = t_user.i_user 
    //              ORDER BY t_board.i_board
    //              DESC
    //         "; 

    // 수정하기
    function upd_board(&$param){
        $i_board = $param['i_board'];
        $title = $param['title'];
        $ctnt = $param['ctnt'];
        $i_user = $param['i_user'];

        $sql = 
        "   UPDATE t_board
            SET title = '$title'
            , ctnt = '$ctnt'
            , updated_at = now()
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }


    //del.php
    function del_board(&$param){

        $i_board = $param['i_board'];
        $i_user = $param['i_user'];

        $sql = 
        "   DELETE FROM t_board 
            WHERE i_board = $i_board
            and i_user = $i_user
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;

        // delete 문에서는 참조당하는 애는 삭제가 안되지만, 참조를 하는 애는 그냥 삭제가 가능!!
    }

