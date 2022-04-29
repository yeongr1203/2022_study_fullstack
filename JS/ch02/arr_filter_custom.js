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
        for(var i=0; i<this.length; i++) {
            cb(this[i],i);
        }
    },
    'filter': function(cb) {
        var tempArr = [];
        for(var i=0; i<this.length; i++) {
            var val = this[i];
            if(cb(val, i)){
                tempArr.push(val);
            }
        }
        return tempArr;
    }   // filter가 문제출제였음. 배열 값 나타내기.
}
var resultArr = arr.filter(function(item, idx) {
    console.log(`${idx}: ${item}`);
    if(item <= 8) {
        return true;
    }
});
console.log(resultArr);

// 아래는 프로젝트 대회나가시는 분들에 대한 내용.
// 콜백 함수에 대한 이해, 비동기에 대한 이해, 콜백 지옥, promise, async/await

