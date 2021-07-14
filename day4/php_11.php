<?php
    if($_POST != null){
        $fs = @fopen("reply.txt","a") or exit("BREAK");
        if($fs != null)
        {
            $msg = $_POST['msg'];
            fputs($fs,$msg."\n");
            fclose($fs);
        }
    }
    $result ="";
    $fs = @fopen("reply.txt","r") or exit("BREAK");
    $i=1;
    while(!feof($fs))
    {
        $msg = htmlspecialchars(fgets($fs));
        if($msg !=  "")
        {
            $result = $i++ .":". $msg . "<br>" . $result;
        }
    }
    fclose($fs);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일을 이용한 댓글 달기</title>
</head>
<body>
    <h2>댓글</h2>
    <form method="post" action="./php_11.php">
        <p><label>댓글 :<input type="text" name="msg"></label></p>
        <p><input type="submit" value="댓글 달기">
    </form>
    <p><?=result?></p>
</body>
</html>