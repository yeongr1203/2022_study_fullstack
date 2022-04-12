<?php

    //3~5월 : 봄
    //6~8월 : 여름
    //9~11월 : 가을
    //12,1,2 : 겨울
    //나머지 값은 : 빈칸.

    $mon = rand(0,15);
    $result = get_season($mon);

    if($result){
        print " ${mon}월은 ${result}입니다.";
    }
    else {
        print "${mon}월은 잘못된 값";
    }
   
    //내풀이
    // function get_season($mon)
    // {
    //     switch($mon){
    //         case 3: case 4: case 5:
    //             return "봄";
    //         case 6: case 7: case 8:
    //             return "여름";
    //         case 9: case 10: case 11:
    //             return "가을";
    //         case 12: case 1: case 2:
    //             return "겨울";
    //         default :
    //             return "";
    //     }        
    // }



    // 선생님 풀이

    // function get_season($mon)
    // {
    //     if($mon < 1 || $mon > 12 )          {return "";}
    //     else if($mon < 3 || $mon === 12 )   {return "겨울";}
    //     else if($mon <6 )                   {return "봄";}
    //     else if($mon <6 )                   {return "여름";}
    //     else                                {return "겨울";}
    // }

    // 선생님풀이 - switch문 사용.
    function get_season($mon)
    {
        switch($mon)
        {
            case 1: case 2: case 12:
                return "겨울";
            case 3: case 4: case 5:
                return "봄";
            case 6: case 7: case 8:
                return "가을";
            case 9: case 10: case 11:
                return "겨울";
            default :
                return "";
        }
    }




?>