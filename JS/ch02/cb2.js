function calc(cb, n1, n2) { //()안에 숫자를 넣을 수 없음. cb라고 적어놨다면 저기는 함수가 들어감. 호출을 하기 위해서.
    return cb(n1, n2);  // 함수가 가진 안에 두가지 값을 다시 리턴할꺼다! 라는 뜻.
}

function fnSum(n1, n2) {
    return n1 + n2;
}

function fnmulti(n1, n2) {
    return n1*n2;
}

const result = calc(fnMulti, 10, 20);
console.log('result : '+result);

const result2 = calc(fnMulti, 10, 20);
console.log('result : '+result2);

console.log(fnMulti);