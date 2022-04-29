var arr = {
    '0': 2,
    '1': 6,
    '2': 10,
    '3': 11,
    '4': 22,
    '5': 1,
    '6': 7,
    'length': 7,
    'forEach': function(cb) {
        console.log('this : '+this[0]); // 객체지향에서 this는 나 자신을 뜻함. 
        // => 0번 방의 나 자신. 
        // console.log('this : '+this : ' + this.length);
        // + this.0은 숫자는 안되지만 0이 문자열일 경우엔 .0이 가능
        /*
            console.log('this : '+this[0]); 이걸 빼고 아래처럼 작성하면 같은 뜻.
            결과값 역시 sum2 : 59

            cb(this[0]);
            cb(this[1]);
            cb(this[2]);
            cb(this[3]);
            cb(this[4]);
            cb(this[5]);
            cb(this[6]);
        */
    }
}
// 자바스크립트에서는 {} 중괄호는 객체이다!
// arr[0] = 10;    // 0번방에 10을 줌.
// console.log(arr[0]);    // 결과값 10

var sum2 = 0;
arr.forEach(function(item) {
    sum2 += item;
});
console.log(`sum2 : ${sum2}`);

// forEach, filter, map
// filter 사용방법을 배우고 유추하여 실행하기

