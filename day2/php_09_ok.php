<?php

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 정보 수정</title>
</head>
<body>
    <form method="post">
    <p><label>아이디 : <input type="text" name="userid" maxlength="20" id="userid" value = "<?=$userid?>">
</label></p>

    <p><label>비밀번호 : <input type="password" name="userpw" maxlength="20" id="userpw" value = "<?=$userpw?>">
</label></p>
    <p><input type="submit" value="가입완료"> <input type="reset" value="다시작성">
    </form></P>
</body>
</html>