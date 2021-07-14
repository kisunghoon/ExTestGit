<?php
    $age = 20;
    $str = "Hello PHP! ";
    $name ="류정원";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>변수</title>
</head>
<body>
    <?php
        echo($str."<br>");
    ?>
    <p>이름: <?=$name?></p>
    <p>나이: 
        <?php 
            echo "{$age}</p>"
        ?>
    <p><input type="text" name="username" value="<?=$name?>"></p>
</body>
</html>