<?php
    session_start();
    
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    if($userid =="admin" && $userpw =="1234"){
        $_SESSION['id'] = $userid;
        echo"<script>alert('로그인 됨')</script>";
    }else
    {
        echo"<script> alert('틀렸어');history.back(); </script>";
    }
?>