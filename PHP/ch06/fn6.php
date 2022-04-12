<?php
    // 문제1) 값만큼 별을 나타내기.    // print_star($star);
    // $star = 3;
    // ***
    //$star = 5;
    // *****


    //문제2) 값만큼 별과 행을 나타내기.
    // star = 3;
    // ***
    // ***
    // ***

    //star = 5;
    // *****
    // *****
    // *****
    // *****
    // *****

    //문제3) 점차 커지는 숫자만큼 별 나타내기
    //$star = 3;
    //*
    //**
    //***

    //$star=5;
    //*
    //**
    //***
    //****
    //*****


    $star= rand(3,10);

    // print_star($star);
    // print_star_line($star);
    print_star_triangle($star);
    
    function print_star($star)
    {
        print " $star : $i ";
        for($i=1; $i<=$star; $i++)
        {
            print "*";
        }
    }

    function print_star_line($star)
    {
        for($i=0; $i<$star; $i++)
        {
            for($z=1; $z<=$star; $z++)
            {
                print "*";
            }
            print "<br>";
        }
    }

    function print_star_triangle($star)
    {
        for($i=0; $i<$star; $i++)
        {
            for($a=0; $a<$i; $a++)
            {
                print "*";
            }
            print "<br>";
        }
    }



    // 선생님풀이

    // function print_star($star)
    // {
    //     for($i=0; $i<$star; $i++)
    //     {
    //         print "*";
    //     }
    // }


    // function print_star_line($star)
    // {
    //     for($i=0; $i<$star; $i++)
    //     {
    //         print_star($star);
    //         // for($z=0; $z<$star; $z++)
    //         // {
    //         //     print "*";
    //         // }
    //         print "<br>";
    //     }
    // }
    //  중복이어서 print_star($star); 이렇게 작성으로 중복값없애기 가능.

    // function print_star_triangle($star)
    // {
    //     for($i=1; $i<=$star; $i++)
    //     {
    //         print_star($i);
    //         // for($z=0; $z<$i; $z++)
    //         // {
    //         //     print "*";
    //         // }
    //         print "<br>";
    //     }
    // }





?>