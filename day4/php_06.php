<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  if(!isset($_SESSION['id'])){

?>
    <form method="post" action="php_06_ok.php">
        <p><label>아이디 : <input type="text" name="userid"></label></p>
        <p><label>비밀번호 : <input type="password" name="userpw"></label></p>
        <p><input type="submit" value="로그인"></p>
    </form>
    <?php 
    }else
    {
    ?>
    <h2><?=$_SESSION['id']?>님 환영합니다</h2>
    <p><a href ="php_06_logout.php">로그아웃</p>
    <?php
    }
    ?>
</body>
</html>