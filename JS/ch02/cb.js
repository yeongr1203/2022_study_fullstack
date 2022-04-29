function sum(n1, n2) {
    return n1 + n2 ;
}
// sum이 리턴할 수 있는값이 무엇이 있을까?
// => 숫자값이 있고, 변수값이 나옴.
// console.log(sum()); // 결과값 NaN

function sum(n1,n2) {
    console.log(1111);  // 
}
// 상단처럼 작성하면 안됨.


var ddd = sum;  //변수하나 만들고 sum을 쓰면 썸의 주소값을 복사해서 줄 수 있어서
function sum(n1,n2) {
    console.log(2222);
}
console.log(ddd(10,20));
//function을 줄 수 있다는것. 함수처럼 쓸 수 있다는 것.