<?php
    session_start();
    include "../include/dbconn.php";
    $b_idx = $_GET['b_idx'];
    $sql = "select * from tb_board WHERE b_idx=$b_idx";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    $b_title = $row['b_title'];
    $b_content = $row['b_content'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기 수정</title>
</head>
<body>
    <h2>글쓰기</h2>
    <form method="post" action="edit_ok.php">
        <input type="hidden" name="b_idx" value="<?$b_idx?>">
        <p><label>아이디: <?=$_SESSION['id']?></label></p>
        <p><label>제목: <input type="text" name="b_title"></label></p>
        <p>내용</p>
        <p><textarea cols="40" rows="6" name="b_content"><?=$b_content?></textarea>
        <p><input type="submit" value="확인"> <input type="reset" value="다시작성">
        <input type="button" value="리스트" onclick="location.href='./list.php'">
    </form>
</body>
</html>