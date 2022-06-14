<?php
    include_once "db/db_user.php";  // 데이터베이스 불러와야하기때문에 넣고.
    session_start();
    
    define("PROFILE_PATH", "img/profile/"); // 상수로 하지 않아도 되지만 img/profile/ 를 상수로 주는게 좋음.
    
    $login_user = $_SESSION["login_user"];  
    // $_SESSION["login_user"] 앞에 &$_SESSION["login_user"] 주면 주소값만 주는 것. 
    // 주솟값만 복사해서 주는게 얕은복사.

    var_dump($_FILES);  // 개발당시 파일정보를 보기위해서 하는것. 구현할때는 주석처리를하든 지우든 해야함.
    if($_FILES["img"]["name"] === "") {
        echo "이미지 없음";
        exit;
    }   // img가 프로필.php에서 img로 줘서 작성. png면 png로 주기.
    // 

    function gen_uuid_v4() {    // printf => mt~ 애들을 %04x%04x-%04x-%04x-%04x-%04x%04x%04x 순차적으로 대입시켜준다. sprintf는 바로 출력해주는 것이 아니라 리턴시켜주는 것.
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0x0fff) | 0x4000
            , mt_rand(0, 0x3fff) | 0x8000
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff) 
        ); 
    }
    $img_name = $_FILES["img"]["name"];         // 업로드한 파일 명이 변수값에 들어감.
    $last_index = mb_strrpos($img_name, ".");   // mb_strrpos($img_name, ".") => strrpos는 포지션 값을 가져온다. 오른쪽부터시작하는데, .을 만날때 멈추고 그 인덱스 번호를 들고옴.
    $ext = mb_substr($img_name, $last_index);
    // mb_substr => mb를 붙인 이유는 한글명을 가진 파일이 깨지기 때문에 무조건 mb_붙이기.
    // $img_name, 원본은 건들지 않음. 


    $target_filenm = gen_uuid_v4() . $ext;  // gen_uuid_v4() 항상 중복되지 않는 값이 나올 예정 // . $ext 확장자명
    // $target_filenm 는 
    $target_full_path = PROFILE_PATH . $login_user["i_user"];   // define으로 상수 지정한 PROFILE_PATH . 로그인한사람의 pk값
    if(!is_dir($target_full_path)) {
        mkdir($target_full_path, 0777, true);   // 디렉토리를 만들어보자, 0777 =>앞에 0이 붙으면 8진수(0~7)이며, 0777 권한을 줌.
        //   
    }

    $tmp_img = $_FILES['img']['tmp_name'];
    $imageUpload = move_uploaded_file($tmp_img, $target_full_path . "/" .$target_filenm);
    // $tmp_img 임시파일, 파일./임시파일명 
    //  $imageUpload 넘어온 애가 불린타입(T,F) 알수있는것은 if문을 썼기 때문에.
    if($imageUpload) { //업로드 성공!
        
        //이전에 등록된 프사가 있으면 삭제!      // 이부분이 없다면 사진이 계속 쌓임.
        if($login_user["profile_img"]) {
            $saved_img = $target_full_path . "/" . $login_user["profile_img"];  // 마지막에 올라온 프로필사진
            if(file_exists($saved_img)) {   // 파일이 있는 지 체크. 있었다면  unlink 삭제...
                unlink($saved_img);
            }
        }

        //DB에 저장!
        $param = [
            "profile_img" => $target_filenm,
            "i_user" => $login_user["i_user"]
        ];

        $result = upd_profile_img($param);
        $login_user["profile_img"] = $target_filenm;
        $_SESSION["login_user"] = $login_user;
        Header("Location: profile.php");
    } else { //업로드 실패!
        echo "업로드 실패";
    }
    


    