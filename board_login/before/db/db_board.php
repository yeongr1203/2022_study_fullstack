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

    // 페이징   -- 리스트에 넣어 줄 것.
    // 페이징이 필요한 값이 변수값에 넘어감. 그래서 sel_paging_count를 가져오면 sql문을 가지고 넘어온다.
    function sel_paging_count(&$param) {   // 전부 뿌릴때는 ()변수가 따로 없지만 여기서는 부분만 뿌려야 하기 때문에 값이 있어야 함.
        $sql = "SELECT CEIL(COUNT(i_board) / {$param["row_count"]} ) as cnt -- CEIL(COUNT(i_board) / 인덱스값 으로 작성.
                  FROM t_board";
                  // 전체에서 몇개인지를 보는 것이기 때문에 레코드 하나는 생김.
        
        if($param["search_txt"] !== "") {   // 빈칸이 없을때!
            $sql .= " WHERE title LIKE '%{$param["search_txt"]}%'";
            // .= 하는 이유는 +=과 같은 의미, 앞의 sql에 뒤에 더 할 sql문으로 
            // 앞에 .= 을 하고 " WHERE..." WHERE절 앞에 반드시 한 칸 띄우기. 
            // 안하면 t_board랑 붙어버리기 때문에 에러터짐. 반드시 띄어쓰기 해주기!!
        }        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);    // 쿼리문을 실행하는 친구. 즉, 실행해서 결과 값이 모두 result로 넘어감.
        //  sql문 값이 result 안에 통으로 담겨져 있음.)
        // 한개의 레코드만 가지고 오기 때문에, 
        mysqli_close($conn); 
        $row = mysqli_fetch_assoc($result);     // rusult의 값을 제일 처음 가지고 올 때 배열로 가지고 와서 넘겨받겠다.
        // 최초 한 번은 정리가 되서 배열로 받아오면 자동으로 계속 다음 레코드로 넘어감.
        // 한줄만 배열로 가지고 온다. // 실행 할때마다 하나의 레코드를 가지고 온다. 첫줄, 또 실행하면 그 다음줄 row로 하나씩 가지고 옴.
        // sql에서 레코드가 하나이기 때문에 하나만 가져올꺼라서 이렇게 실행.
        // 만약 많은 레코드가 있었다면 while문을 사용함.
        return $row["cnt"]; // 컬럼(방)이 하나밖에 없어서 1개만 씀. 
        // 결과를 $row["cnt"] 가 2이기 때문에 2가 리턴이 됨.
        // 즉, 배열로 넘어온 값을 받음. 페이지가 2페이지 필요하기때문에 2를 받음.
    }



    // list
    function sel_board_list(&$param){        
        $sql = 
        "   SELECT A.i_board, A.title, A.i_user, A.created_at,
                    B.nm
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user ";
        // 아래는 메모리 합치기로 작업한 것!!
        if($param["search_txt"] !== "") {   // 빈칸이 없을때!
            $sql .= " WHERE A.title LIKE '%{$param["search_txt"]}%'"; }
            // order by는 WHERE절 뒤에 와야함 
        $sql .= " ORDER BY A.i_board DESC
                  LIMIT {$param["s_idx"]}, {$param["row_count"]}"; 
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;

        // 아래처럼 이렇게 할 수 있지만, 빈칸 %% 일때도 포함하니 성능저하가 될 수있기 때문에 지금처럼 작성.
        // "   SELECT A.i_board, A.title, A.i_user, A.created_at,
        // B.nm
        // FROM t_board A
        // INNER JOIN t_user B
        // ON A.i_user = B.i_user
        // WHERE title LIKE '%{$param["search_txt"]}%'
        // ORDER BY A.i_board DESC
        // LIMIT {$param["s_idx"]}, {$param["row_count"]}
        // ";

        // 검색창 넣기 전
        // "   SELECT A.i_board, A.title, A.i_user, A.created_at,
        //             B.nm
        //     FROM t_board A
        //     INNER JOIN t_user B
        //     ON A.i_user = B.i_user
        //     ORDER BY A.i_board DESC
        //     LIMIT {$param["s_idx"]}, {$param["row_count"]}  -- 인덱스와 숫자값 모두 써줘야함.
        // ";
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

    // 검색     -- 새로오신 선생님
    // function search_board(&$param){
    //     $conn = get_conn();        
    //     $search_select = $param['search_select']; //select 선택값
    //     $search_input_txt = $param['search_input_txt']; //검색어
    //     $textArray = explode(" ", $search_input_txt);    // 검색어를 공백으로 나눈다.//나눌때 explode
        
        
    //     // $where = "B.nm";                // 배열 전                  //sql 검색 시 열(속성) 이름.    // 입력된 것 검색할때,  //nm 은 i_user, board에서는 title
    //     $where = [];
    //     $query = 
    //     " SELECT A.i_board, A.title, A.ctnt, A.created_at, B.i_user, B.nm 
    //     FROM t_board A
    //     INNER JOIN t_user B
    //     ON A.i_user = B.i_user
    //     WHERE ";
    //     // 중복되는 값만 a. b. 을 사용해야함.
    //     // $query = " SELECT * FROM t_board WHERE title LIKE "%닌텐도%" OR title LIKE "&동숲&" ";
    //     // title LIKE "%닌텐도%" OR title LIKE "&동숲&" " 이걸 뺸 이유는 for문으로 돌릴거라 필요가없음.
    //     switch($search_select){
    //         case "search_writer":
    //             // $where = "B.nm";     // 배열 전.
    //             $where += ["B.nm"];
    //             break;
    //         case "search_title":
    //             // $where ="A.title";   // 배열 전
    //             $where +=["A.title"];
    //             break;
    //         case "search_ctnt":
    //             // $where = "A.ctnt";   //배열전
    //             $where += ["A.title", "A.ctnt"];
    //             break;
    //         default:                
    //     }

    //     for ($i = 0; $i < count($textArray); $i++){
    //         for($j = 0; $j < count($where); $j++){
    //             $query = $query." $where[$j] LIKE '%$textArray[$i]%' ";
    //             //마지막 검색어가 아니면
    //             if(($i !== count($textArray) -1) || ($j !== count($where) -1)){
    //                 $query = $query."OR";
    //             }
    //         }
    //     }
    //     // 배열전
    //     // for ($i = 0; $i < count($textArray); $i++) {
    //     //     $query = $query." $where LIKE '%$textArray[$i]%' ";  //'%$textArray[$i]%' 문자열로 되어있어서 이렇게 표현.
    //     //     if ($i !== count($textArray) -1 ) { //마지막 검색어가 아니면,
    //     //         $query = $query."OR";
    //     //     }
    //     // }
    //     $result = mysqli_query($conn, $query);
    //     mysqli_close($conn);
    //     return $result;

    //     // print $query; // 검색이 잘되는지 확인.
    //     // 값이 나오는지 확인....
    //     // echo $search_select."<br>";
    //     // echo $search_input_txt."<br>";
    //     // print_r($textArray);

    //     // mysqli_close($conn);
    //     // // return $result;
    //     // return null;    //값을 보기 위해 리턴을 닫음.
    // }


//  서치
// 쿼리스트링을 보내는 이유는 값을 받기 위해서이다. 그래서 주소에 보면 검색내용이 나타남.

