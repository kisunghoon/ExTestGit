<?php
    include './include/dbconn.php';

    $sql = "select * from tb_board_pr order by b_idx DESC;";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <h2>리스트</h2>
    <table border="1" width="800">
    <tr>
        <th>번호</th>
        <th>제목</th>
        <th>글쓴이</th>
        <th>조회수</th>
        <th>날짜</th>
    </tr>
   
<?php
    while($row = mysqli_fetch_array($result)) {

        $b_idx = $row['b_idx'];
        $b_userid = $row['b_userid'];
        $b_title = $row['b_title'];
        $b_content = $row['b_hit'];
        $b_regdate = $row['b_regdate'];
        $b_file = $row['b_file'];
        $b_up = $row['b_up'];
?>
    <tr>
        <th><?=$b_idx?></th>
        <th><?=$b_userid?></th>
        <th><?=$b_title?></th>
        <th><?=$b_content?></th>
        <th><?=$b_regdate?></th>
    </tr>
<?php
    }
?>
    </table>


    <p><input type="button" value="글쓰기" onclick="location.href='./write.php'">
    


    </table>
</body>
</html>