<?php
    include "include/dbconn.php";
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

   

    if(!$conn){
        echo "db 연결 실패";
    }else {
        $sql="
        INSERT INTO tb_member (mem_userid,mem_pass,mem_name,mem_email,mem_ssn,mem_birthday,
        mem_gender,mem_hobby,mem_hp,mem_zipcode,mem_address1,mem_address2,mem_address3) 
        VALUES ('$userid',PASSWORD('$userpw'),'$name','$email','$ssn','$birthday ','$gender ','$hobby',
        '$hp','$zipcode','$address1','$address2','$address3');";

        $result = mysqli_query($conn,$sql);
        echo "<script>alert('회원 가입이 완료');location.href='login.php';</script>";
    }
?>

