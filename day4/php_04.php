<?php
    session_start();
    $_SESSION['id'] = "admin";
    $_SESSION['name'] = '관리자';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>세션</h2>
    <p>세션 id : <?=session_id()?></P>
    <p>id 변수 값: <?=$_SESSION['id']?></P>
    <p>세션 name : <?=$_SESSION['name']?></P>
</body>
</html>