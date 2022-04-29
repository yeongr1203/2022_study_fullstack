var n1 = 10;
var s1 = '20';
s1 = parseInt(s1); //항변환. parseInt() 숫자로 int로 항변환하여. 아래의 결과값은 30

console.log(n1 + s1);

var s2 = '20';
s2 = Number(s2);
console.log(n1+s2);

console.log(parseInt("12a34")); // 숫자만 있는게 아니라 문자도 섞여 있었음.
// 12 만 항변해주고 문자열을 만나는 순간 항변환을 하지 않음.

console.log('parseInt' + parseInt("12a34"));
console.log('Number : ' + Number("12a34")); // 결과값 Number : NaN
// 에러가 터진건 아니지만 숫자값이 아니었다고 알려줌.