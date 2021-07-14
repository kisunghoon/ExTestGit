<?php
    include  "include/dbconn.php"

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $ssn1   = $_POST['ssn1'];
    $ssn2   = $_POST['ssn2'];
    $ssn = $ssn1.$ssn2;
    $birth_year = $_POST['birth_year'];
    $birth_month = $_POST['birth_month'];
    $birth_day = $_POST['birth_day'];
    $birthday = $birth_year.$birth_month.$birth_day;
    $gender = $_POST['gender']; // 남자 또는 여자
    $hobby = $_POST['hobby'];
    foreach($hobby as $h){
        $hobbystr .=$h.", ";
    }
    $hp = $_POST['hp'];
    $zipcode = $_POST['zipcode'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $address3 = $_POST['address3'];

   $sql = "UPDATE tb_member SET mem_email='$email',mem_gender='$gender',mem_ssn='$ssn',mem_zipcode='$zipcode',mem_address1='$address1',mem_address2='$address2',mem_address3='$address3',
   mem_hobby='$hobbystr',mem_birthday='$birthday' WHERE mem_userid='".$_SESSION['userid']."'";

    $result = mysql_query($conn,$sql);
    //echo $result."<br>";
    echo"<script>alert('수정되었습니다.');location.href='modify.php';</script>";

?>