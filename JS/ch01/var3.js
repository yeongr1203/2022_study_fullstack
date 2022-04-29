var n1 = 3;
var n2 = '3';

console.log( n1 == n2); // 문자열이지만 == 은 숫자값이 같아서 true
console.log(n1 === n2); // 타입도 같아야해서 false
console.log( n1 !== n2 ); // !=은 ==의 반대가 true, 그래서 false로 나옴.
console.log(n1 !== n2); // === 의 반대, 그래서 타입이 다르면 true