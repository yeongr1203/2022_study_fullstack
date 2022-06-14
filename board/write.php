<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>글쓰기</h1>
    <a href="list.php"><button>리스트</button></a>  <!-- 단순한 이동은  -->
    <form action="/board/write_proc.php" method="post"> <!-- 쿼리스트링으로 날아감. 폼테그는 무조건 포스트방식. -->
    <!-- /board/write_proc.php 맨앞 / 없으면 board폴더 안에 또 board폴더에 있는 으로 읽히기 때문에 앞에 /를 붙여주던지 아니면 /board 모두 뺴주기. -->
        <div><input type="text" name="title" placeholder="제목"></div> <!-- 쿼리스트링 날아감 -->
        <!-- 인풋 타입에 네임이 제일  중요함. 네임값을 타이틀로 할게! 라고 약속을 하는 것. 보통 저장하고자하는 컬럼명을 적는다. 네임 = 키값. -->
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div>
            <input type="submit" value="글등록">
            <input type="reset" value="초기화">
        </div>
    </form>
    
</body>
</html>
<!-- 
    이 php는 값을 넣어야 할 창의 역할, write_proc는 그 창안에 저장할 수 있는 proc창이 필요함. 
    그래서 두개가 있어야함.
    수정도 수정할 창이 필요할 것이고, 수정을 눌렀을때 수정시켜주는 proc가 필요함.


    html파일이지만, php로 작업으로 통일한 이유는 php로 전체 작업중익때문에.
    html로 사용가능하지면 불러오는값에 .php가 아닌 .html로 해야함.
 

    form태그를 쓴다면 무조건 pst방식. 꼭 method="post" 이걸 꼭 넣어야함. 
    없이 등록하면 자동으로 겟방식으로 됨.

    전달을 어떻게 할것인가.
    get방식 = 쿼리스트 ?key=val = 주소값 뒤쪽에 붙어서 호출. 고로 노출이됨.
    속도는 겟이 조금 더 빠름, 대신 보안이 안됨. 노출되기때문에
    주소값모두 255자까지가 되기때문에, 긴글 보낼때는 절대 겟방식 사용ㅎ면 안된다. 포스트 방식 추천.


    포스트방식은 = 리퀘스트 할 떄는 
    수정, 저장 모두 포스트 방식.
    삭제는 겟방식 사용이 가능. 포스트도 가능.

    액션의 주소로 포스트 방식으로 타이틀,ctnt라는 이름으로 보낸다.




-->