<?php
    include "include/dbconn.php";
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];


   
    if(!$conn)
    {
        echo("연결 실패");
    }else{
       $sql = "select mem_idx,mem_userid,mem_name from tb_member where mem_userid='$userid' and mem_pass=password('$userpw')";
    //   echo $sql;
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
       if($row['mem_idx']==""){
          // echo("Asdfsda");
            echo "<script>alert('아이디 또는 비밀번호 확인하세요');history.back();</script>";
       }else {
           $_SESSION['idx'] = $row['mem_idx'];
           $_SESSION['id'] = $userid;
           $_SESSION['name'] = $row['mem_name'];
             echo "<script>alert('로그인 되었습니다.');location.href='login.php';</script>";
       }
    }
?>
