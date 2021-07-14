<?php
    session_start();
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    //아이디 : admin 비밀번호: 1234

    if($userid == "admin" && $userpw =="1234")
    {
        $_SESSION['id'] = $userid;
        echo "<script>alert('로그인 되었습니다.'); location.href='php_06.php';</script>";
    }else {
        echo "<script>alert('아이디 비밀번호를 확인하세요.');
        history.back();</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세션을 이용한 로그인</title>
</head>
<body>
    
</body>
</html>