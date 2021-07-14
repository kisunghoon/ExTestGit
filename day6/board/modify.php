<?php
    include "include/dbconn.php";
    $mem_idx = $_SESSION['idx'];
    $sql = "SELECT * FROM tb_member WHERE mem_idx = $mem_idx"; // *를 컬럼이름으로 변경하세요!! 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $userid = $row['mem_userid'];
    $userpw = $row['mem_pass'];
    $name   = $row['mem_name'];
    $email  = $row['mem_email'];
    $ssn   = $row['mem_ssn'];
    $ssn1 = substr($ssn, 0, 6);
    $ssn2 = substr($ssn, 6, 7);
    $birthday = $row['mem_birthday'];
    $year = substr($birthday, 0, 4);
    $month = substr($birthday, 4, 2);
    $day = substr($birthday, 6, 2);
    $gender = $row['mem_gender'];
    $hobby = $row['mem_hobby'];
    $hobbyarr = explode(", ", $hobby);
    // foreach($hobbyarr as $h){
    //     echo  $h."<br>";
    // }
    $hp = $row['mem_hp'];
    $zipcode = $row['mem_zipcode'];
    $address1 = $row['mem_address1'];
    $address2 = $row['mem_address2'];
    $address3 = $row['mem_address3'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 정보 수정</title>
</head>
<body>
    <h2>회원 정보 수정</h2>
    <form method="post" action="modify_ok.php">
    <p><label>아이디 : <input type="text" name="userid" maxlength="20" id="userid" value="<?=$userid?>"></label></p>
    <p><label>비밀번호 : <input type="password" name="userpw" maxlength="20" id="userpw"></label></p>
    <p><label>비밀번호 확인 : <input type="password" name="userpw_re" maxlength="20" id="userpw_re">
    <p><label>이름 : <input type="text" name="name" id="name" value="<?=$name?>"></label></p>
    <p><label>이메일 : <input type="text" name="email" id="email" value="<?=$email?>"></label></p>
    <p>주민등록번호 <input type="text" name="ssn1" id="ssn1" size="6" maxlength="6" value="<?=$ssn1?>"> - <input type="password" name="ssn2" id="ssn2" size="7" maxlength="7" value="<?=$ssn2?>"> <input type="button" value="주민등록번호 검증" id="btnssn"></p>
    <input type="hidden" id="isSsn" value="n">
    <p>생년월일 : <input type="text" name="birth_year" id="year" size="4" readonly value="<?=$year?>">년 <input type="text" name="birth_month" id="month" size="4"  readonly value="<?=$month?>">월 <input type="text" name="birth_day" id="day" size="4" value="<?=$day?>" readonly>일</p>
    <input type="hidden" id="isSsn" value="n">
    <p>성별 : <label>남자<input type="radio" name="gender" value="남자" <?php if($gender == "남자") {?> checked <?php } ?>></label> <label>여자<input type="radio" name="gender" value="여자" <?php if($gender == "여자") {?> checked <?php } ?>></label></p>
    <p>취미 : 
    <label>드라이브<input type="checkbox" name="hobby[]" value="드라이브" <?php if(in_array('드라이브', $hobbyarr)) { ?> checked <?php } ?>></label> <label>등산<input type="checkbox" name="hobby[]" value="등산" <?php if(in_array('등산', $hobbyarr)) { ?> checked <?php } ?>></label> <label>게임<input type="checkbox" name="hobby[]" value="게임" <?php if(in_array('게임', $hobbyarr)) { ?> checked <?php } ?>></label> <label>영화감상<input type="checkbox" name="hobby[]" value="영화감상" <?php if(in_array('영화감상', $hobbyarr)) { ?> checked <?php } ?>></label> <label>쇼핑<input type="checkbox" name="hobby[]" value="쇼핑" <?php if(in_array('쇼핑', $hobbyarr)) { ?> checked <?php } ?>></label>
    <p><label>휴대폰 번호 : <input type="text" name="hp" id="hp" value="<?=$hp?>"></label></p>
    <p><label>우편번호 : <input type="text" size="5" name="zipcode" id="sample6_postcode" readonly value="<?=$zipcode?>"></label> <input type="button" value="검색" onclick="sample6_execDaumPostcode()"></p>
    <p><label>주소 : <input type="text" name="address1" id="sample6_address" value="<?=$address1?>"></label></p>
    <p><label>상세주소 : <input type="text" name="address2" id="sample6_detailAddress" value="<?=$address2?>"></label></p>
    <p><label>참고항목 : <input type="text" name="address3" id="sample6_extraAddress" value="<?=$address3?>"></label></p>
    <p><input type="submit" value="수정완료"> <input type="reset" value="다시작성">
    <input type="button" value="돌아가기" onclick="location.href='login.php'"></p>
    </form>
</body>
</html>