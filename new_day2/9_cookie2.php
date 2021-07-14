<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키 - 2</title>
</head>
<body>
    <h2>쿠키 - 2</h2>
<?php
    if(!isset($_COOKIE['userid'])){ // 쿠키가 존재하지 않을 때
        echo "<p>쿠키가 존재하지 않습니다.</p>";
    }else{  // 쿠키가 존재할 때
        echo "<p>키가 존재합니다.</p>";
        echo "<p>저장된 쿠키의 값 : ".$_COOKIE['userid']."</p>";
    }
?>
</body>
</html>