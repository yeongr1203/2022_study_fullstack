var arr = [2, 6, 10, 11, 22, 1, 7];
var sum = 0;
for(var i=0; i<arr.length; i++) {
    sum += arr[i];
}
console.log(`sum : ${sum}`);    // 홑따옴표 아님!! 물결임. ` `

var sum2 = 0;
arr.forEach(function(item){
    sum2 += item;   // arr =객체, forEach =메소드
});
console.log(`sum2 : ${$sum2}`); 
