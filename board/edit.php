<?php

    include "../include/dbconn.php";

    $b_idx = $_GET['b_idx'];
   
    $sql = "SELECT b_idx,b_userid,b_title,b_content,b_regdate,b_hit,b_file FROM tb_board WHERE b_idx = $b_idx";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    $imgpath="";
    if($row['b_file'] !="")
    {
        $imgpath = "<img src ='".$row['b_file']."'width='200' alt='이미지'>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>커뮤니티 게시판 글수정</title>
</head>
<body>
    <h2>커뮤니티 게시판 글수정</h2>
    <form method="post" action="edit_ok.php" ecntype="multipart/form-data">
        <input type="hidden" name="b_idx" value=<?$b_idx?>>
        <p><label>아이디 :<?=$_SESSION['id']?>(<?=$_SESSION['name']?>) </label></p>
        <p><label>제목 :<input type="text" name="b_title" value ="<?=row['b_title']?>"></label></p>
        <p>내용</p>
        <p><textarea cols="40" rows="6" name="b_content"><?=row['b_content']?></textarea></p>
        <p>파일 : <input type="file" name="b_file"></p>
        <p><input type="submit" value="확인"><input type="reset" value="다시작성">
        <input type="button" value="리스트" onclick="location.href='list.php'"></p>
    </form>


</body>
</html>