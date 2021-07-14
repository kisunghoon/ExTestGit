<?php
    $result = "";
    $lines = @file("data.txt") or $result ="파일을 읽을 수 없습니다.";

    if($lines !=null){
        for($i=0;$i<count($lines);$i++){
            $result .=($i +1)." : ".$lines[$i]."<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$result?></p>
</body>
</html>