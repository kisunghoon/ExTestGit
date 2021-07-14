<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        변수
    </h2>

    <?php
        $var1 = 5;
        function func1() {
            $var2 = 10;
           global $var1;
            echo "함수 내에 호출한 지역변수 var2의 값은 {$var2} 입니다.<br>";
            echo "함수 내에 호출한 지역변수 var1의 값은 {$var1} 입니다.<br>";
        }

        func1();
      //  echo "함수 내에서 호출한 지역변수 var1의 값은 {$var1}"
      echo "함수 밖에서 호출한 전역변수 var1의 값은 {$var1}"
    ?>
</body>
</html>