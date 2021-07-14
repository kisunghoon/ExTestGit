
<?php
   session_start();
   include "../include/dbconn.php";

   $b_idx =$_GET['b_idx'];
   $sql = "UPDATE tb_board_pr SET b_hit + 1 WHERE b_idx=$b_idx";
   $result = mysqli_query($conn,$sql);
   $sql = "SELECT * FROM tb_board_pr WHERE b_idx=$b_idx";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result);

   $id = $_SESSION['id'];
   $b_userid = $row['b_userid'];
   $b_title =  $row['b_title'];
   $b_content = $row['b_content'];
   $b_hit = $row['b_hit'];
   $b_regdate = $row['b_regdate'];
   $b_up = $row['b_up'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글보기</title>
</head>
<body>
    <h2>글보기</h2>
    <p><b>글쓴이</b> :<?=$b_userid?> </p>
    <p><b>날짜 </b>  : <?=$b_regdate?></p>
    <p><b>조회수 </b> :<?=$b_hit?> </p>
    <p><b>추천수</b>:<?=$b_up?></p>
    <p><b>제목</b> :<?=$b_title?></p>
    <p><b>내용</b></p>
    <p><?=$b_content?></p>

    <p><input type="button" value="리스트" onclick="location.href='./list.php'">

    <?php

    if($id == $b_userid){ 
    
    ?>
    <input type="button" value="수정" onclick="location.href='./edit.php'"> 
    <input type="button" value="삭제" onclick="location.href='./delete.php'">
    
    <?php
    }
    ?>
  
</body>
</html>