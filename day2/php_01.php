<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>변수</h2>
<?php
    function counter()
    {
        static $cnt = 1;
        echo "정적변수의 cnt 값은 {$cnt} 입니다.<br>";
        $cnt++;

    }

    counter();
?>
</body>
</html>