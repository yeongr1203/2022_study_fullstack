function sum(n1, n2) {  // var 빼고 순수하게 변수명만 넣어주기.
    return n1 + n2;
}

function printSum(n1, n2) {
    console.log('sum : ' +(n1+n2)); // 뒤에 값이 없다면 자동리턴이 되는데, 값이없이 리턴이 되어서 printSum의 result:에는 찾을 수 없다고 나타남.
    // 값을 넣어줘서 리턴을 돌려야 값을 출력함.
}

var result = sum(10,20);
console.log('result : ' + result );

result = sum(10,20,30);
console.log('result : ' +result);

result = sum(10);   // sum()은 괄호 안에 값이 +가 될수있도록 값이 여러개여야하는데 없어서 에러아닌 에러가 터짐.
console.log('result : ' +result);

result = printSum(100,200);
console.log('result : ' +result);