// 자바스크립트는 메소드로 만들 수 있고, 함수만들수 있고. => 자바는 없음.
function m1() {
    console.log('-- m1 fn called --');
    return 1;
}

function m2() {
    console.log('-- m2 fn called --');
}

//true로 활동하는 친구 : !0, !"",   // 0빼고 다, 문자열은 빈칸 빼고 다, 객체, 배열 => true
// false로 활동하는 친구 : 0 , "", false, undefind, null    // 얘는 0과 빈칸, undefind, null => false

if(m1() || m2()) {
    consolelog ('이것은 true일까 false일까');
}