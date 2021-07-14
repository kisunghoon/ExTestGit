<?php
  
  include '../include/dbconn.php';
  $sql = "SELECT * FROM tb_board_pr order by b_idx DESC";
  $result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 리스트</title>
</head>
<body>
    <h2>게시판 리스트</h2>
    <table border="2" width="800">
        <tr>
            <th>번호</th>
            <th>아이디</th>
            <th>제목</th>
            <th>조회수</th>
            <th>날짜</th>
            <th>추천수</th>
        </tr>
<!--
     mysqli_fetch_array 함수는 mysqli_query를 통해 얻은 result set에서 레코드를 1개씩 리턴하는 함수입니다 
     레코드를 1개씩  리턴해주는 것은 mysqli_fetch_row나 my_sqli_fetch_assoc와 동일하지만 리턴하는 배열의 형태는 다르다 
     mysqli_fetch_array 함수는 순번을 키로 하는 일반 배열과 컬럼명을 키로하는 연관 배열 둘 모두 값으로 갖는 배열을 리턴합니다(일반배열 + 연관배열)
     더이상 가져올 데이터가 없으면 NULL이 출력된다 
    -->
<?php
   while($row = mysqli_fetch_array($result)) {
    $b_idx = $row['b_idx'];
    $b_userid = $row['b_userid'];
    $b_title = $row['b_title'];
    $b_hit = $row['b_hit'];
    $b_regdate = $row['b_regdate'];
    $b_up = $row['b_up'];

?>
    <tr>
        <th><?=$b_idx?></th>
        <th><?=$b_userid?></th>
        <th><a href="./view.php?b_idx=<?=$b_idx?>"> <?=$b_title?></th>
        <th><?=$b_hit?></th>
        <th><?=$b_regdate?></th>
        <th><?=$b_up?></th>
    </tr>

<?php
    }

?>
    </table>
    <p><input type="button" value="글쓰기" onclick="location.href='./write.php'"> 
    <input type="button" value="돌아가기" onclick="location.href='../login.php'"></p>
    
</body>
</html>