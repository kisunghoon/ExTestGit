<?php
    include "include/dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
<?php
    if(!isset($_SESSION['id'])){
?>
    <h2>로그인</h2>
    <form method="post" action="login_ok.php">
        <p><label>아이디 : <input type="text" name="userid"></label></p>
        <p><label>비밀번호 : <input type="password" name="userpw"></label></p>
        <p><input type="submit" value="로그인"></p>
    </form>
<?php
    }else{
?>
    <h2><?=$_SESSION['id']?>(<?=$_SESSION['name']?>)님 환영합니다.</h2>
    <p><input type="button" value="로그아웃" onclick="location.href='logout.php'"> <input type="button" value="정보수정" onclick="location.href='modify.php'">
    <input type="button" value="커뮤니티 게시판" onclick="location.href='board/list.php'"></p>

<?php
    }
?>
</body>
</html>