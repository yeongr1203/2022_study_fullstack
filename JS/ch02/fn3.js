sum(1,2);
sum(1,2,3,4,5,6);
sum(1,2,3,4,5,6,2,3,4,5,6,2,3,4,5,6,2,3,4,5,6);

function sum() {
    console.log(arguments.length);  // arguments 사용해서 배열로 정리가 되어서 들어간다.

    for(var i=0; i<arguments.length; i++) { // length() 괄호가 없으면, 그냥 속성 읽기.  
                                            // OO아 혹시 이거 맞아? 하는것.
        sum += arguments[i];
    }
    console.log('sum : ' + sum);    // 이건 명령내린것. OO아 이거좀 출력해
}
/*
객체 => class라는 설계도로 이 설계도로 객체를 이렇게이렇게 할 것이다. 그게 인스턴스.
객체란? 내가 봤을때 이름을 줄 수 있으면 객체. 예) 강아지, 공기, 구름, 바람 등...
1) 객체 : 속성(정적인 것)과 메소드(움직이는것)함수
메소드: 사람으로 따지면 움직이는것을 메소드라고함. 
속성 : 사람으로 따지면 이름, 나이, 성격 등 값과 같은 것들을 말함.
값을 저장하는것은 속성, 값을 이동하는 것은 메소드. 즉, 이름을 준다면 객체라고 생각하면 됨.
예) 에어컨: 온도 올리고 높이고 날개 움직이게하고 이런것들은 메소드, 설정한 온도, 풍량단계 등 이러한 것들은 속성. 속성은 값을 저장하는 것.

객체들끼리 메세지를 주고받고 하는 것을 관장하는 애는 메인메소드;
메인메소드가 중요한 이유는 시작하는 것이기 때문 // 예)우주가 빅뱅이 된 것. 그것이 메인메소드
메인메소드를 실행하는 순간이 처음 시작.



*/