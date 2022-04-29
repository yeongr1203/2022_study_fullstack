// forEach, filter, map
// filter 사용방법을 배우고 유추하여 실행하기

var arr = [2, 6, 10, 11, 22, 1, 7];
var resultArr = arr.filter(function(item, idx) {
    // 새로운 배열을 만듬.
    console.log(`${idx}: ${item}`);
    // return false;   //리턴 true한 것만 새로운 배열안에 뽑아내고 싶을때,
    if(item <= 8) {
        return true;
    }
});
console.log(resultArr);
var newArr = [];
newArr.push(10);
newArr.push(12);
console.log(newArr);

/* 직접주는것.
var newArr = [];
newArr[0] = 10;
newArr[1] = 12;
newArr[5] = 14;
console.log(newArr);
newArr.length = 1;
console.log(newArr);
*/