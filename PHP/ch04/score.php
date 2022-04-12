<?php
    $score = 100;

    switch($score)
    {
        case 100:
        case 99:
            print $score;
            print "당신의 성적은 A입니다."; //case 값이 맞으면 진입을하고 또 실행을 하게 되는데 , 브레이크를 만날때까지 실행.
            break;
        
        case ($score>=90):
            print "당신의 성적은 AB입니다.";
            break;
            //qj

        case 80:
            print "당신의 성적은 B입니다.";
            break;

        case 60:
            print "당신의 성적은 C입니다.";
            break;

        case 0:
            print "당신의 성적은 F입니다.";
            break;
        
        default:
            print "디폴트!"
            break;
    }
?>

<!-- 

case는 break를 만날때까지 나타냄. 그러므로 break를 줘야함.
범위주는 것 되지만, if문을 써서 충분히 사용할 수 있을 때 그때 배움.
범위를 줄 수있지만, 따로 하나씩 주는 것에 익숙해지기~
케이스 값은 딱 맞아야 실행이 됨. 브레이크 만날때까지 실행.







 -->