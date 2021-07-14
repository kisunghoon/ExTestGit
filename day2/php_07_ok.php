<?php 

    $id = $_POST["userid"];
    $pw = $_POST["userpw"];

    if($id == "apple" && $pw == 1234)
    {
        echo "성공"."<br>";
        echo "apple님 환영합니다"."<br>";
        
    }else {
        echo '<script>alert("no"); history.back(); </script> ';
        
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
   
</body>
</html>