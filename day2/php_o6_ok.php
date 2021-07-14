<?php 

    $number = $_POST["usernumber"];
    $name = $_POST["username"];
    
    $kor = $_POST["userkor"];
    $eng = $_POST["usereng"];
    $math = $_POST["usermat"];

    $sum = $math + $eng + $kor;
    $even = $sum /3;    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>입력한 학번은 <?=$number?>입니다</p>
    <p>입력한  이름은 <?=$name?>입니다</p>
    <p>입력한 국어점수 <?=$kor?>입니다</p>
    <p>입력한  영어점수 <?=$eng?>입니다</p>
    <p>입력한 수학점수 <?=$math?>입니다</p>
    <p>입력한 총점수 <?=$sum?>입니다</p>
    <p>입력한 평균점수 <?=$even?>입니다</p>
    <?php
        if($even >=80)
        {
            echo "학점은 A 입니다"."<br>";   
        }
        else if($even >=70)
        {
            echo "학점은 B 입니다"."<br>";
        }
        else if($even >=60)
        {
            echo "학점은 C 입니다"."<br>";
        }
        else 
        {
            echo "학점은 F 입니다"."<br>";
        }

    ?>
</body>
</html>