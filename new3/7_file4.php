<?php
    $fs = @fopen("tel.txt","r") or exit("BREAK");
    $result = "";
    while(!feof($fs)){
        $result .= fgets($fs,10);

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
    <h2>파일-4</h2>
    <p><?=$result?></p>
</body>
</html>