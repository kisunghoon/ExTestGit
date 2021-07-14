<?php
    // 데이터를 추가
    if($_POST != null){
        // echo($_POST['msg']);
        $fs = @fopen("reply.txt", "a") or exit("BREAK");
        if($fs != null){
            $msg = $_POST['msg'];
            fputs($fs, $msg."\n");
            fclose($fs);
        }
    }

    // 데이터를 읽기
    $result = "";
    $fs = @fopen("reply.txt", "r") or exit("BREAK");
    $i = 1;
    while(!feof($fs)){
        $msg = htmlspecialchars(fgets($fs));
        if($msg != ""){
            $result = $i++ ." : " . $msg . "<br>" . $result;
        }
    }
    fclose($fs);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="./8_file5.php">

        <p><label>댓글:<input type="text" name="msg"></label></p>
        <p><input type="submit" value="댓글달기"></p>
    </form>
    <hr>
    <p><?=$result?></p>
</body>
</html>