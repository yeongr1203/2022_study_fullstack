// 주석은 // 이것과 /* */ 이것 뿐.
var n1; // 변수 할당.
var nn2=20;
n1 = 30;    //변수를 선언하는 언어들 쓰지 않음.
var nn3 = n1 + nn2;

console.log('nn3 : '+ nn3);  //var nn3 값 출력해보기    // nn3 : 50 으로나옴.
// 더하기 양쪽 어딘가에 문자열이 있다면, 문자로 값이 나타남.
console.log('10'+10);  // 문자열 + 문자열이라서 js에서는 1010으로 출력. 문자열이 있으면 문자열이 우선순위라서 문자열로 다 나타남.
console.log('10' - 10); // 무적인 + 를 뺀 나머지는 숫자로 인식해 계산이 된다. 결과값은 0
console.log('10' * 10); //  곱셈 값이 나옴. 결과값은 100
console.log(10 + 10 + '10');
// 더하기는 왼쪽부터 시작. 그래서 10 + 10 부터 시작. 그럼 20, 뒤가 문자열이라서
// 결과값이 2010
console.log(10+10*'10');
console.log('10'+10+10);


// let, const vs6에서만 지원.
let n2; // 얘는 변수
const N3 = 10;   // 얘는 상수. 상수는 대문자로 사용. 상수는 한번 값 입력되면 수정이 안됨.
// 상수는 한 번 정하면 수정이 안됨. 그래서 절대 중간에 수정하면 안되는 것!!

// var와 let의 차이 = var는 호이스팅이 됨. let과 const는 호이스팅이 되지 않음.
// 