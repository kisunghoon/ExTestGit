<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery-3.5.1.min"></script>
    <script src="js/regist.js"></script>


</head>
<body>
    <form method="post" action="php_09_ok.php" onsubmit="return checkForm()">
    <p><label>아이디 : <input type="text" name="userid" maxlength="20" id="userid">
</label></p>
    <p><label>비밀번호 : <input type="password" name="userpw" maxlength="20" id="userpw">
</label></p>
    <p><input type="submit" value="가입완료"> <input type="reset" value="다시작성">
    </form></P>
</body>
</html>