<?php
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $ssn1   = $_POST['ssn1'];
    $ssn2   = $_POST['ssn2'];
    $birth_year = $_POST['birth_year'];
    $birth_month = $_POST['birth_month'];
    $birth_day = $_POST['birth_day'];
    $gender = $_POST['gender']; // 남자 또는 여자
    $hobby = $_POST['hobby'];
    $hp = $_POST['hp'];
    $zipcode = $_POST['zipcode'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $address3 = $_POST['address3'];
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
    <form method="post">
    <p><label>아이디 : <input type="text" name="userid" maxlength="20" id="userid" value="<?=$userid?>"></label></p>
    <p><label>비밀번호 : <input type="password" name="userpw" maxlength="20" id="userpw" value="<?=$userpw?>"></label></p>
    <p><label>비밀번호 확인 : <input type="password" name="userpw_re" maxlength="20" id="userpw_re">
    <p><label>이름 : <input type="text" name="name" id="name" value="<?=$name?>"></label></p>
    <p><label>이메일 : <input type="text" name="email" id="email" value="<?=$email?>"></label></p>
    <p>주민등록번호 <input type="text" name="ssn1" id="ssn1" size="6" maxlength="6" value="<?=$ssn1?>"> - <input type="password" name="ssn2" id="ssn2" size="7" maxlength="7" value="<?=$ssn2?>"> <input type="button" value="주민등록번호 검증" id="btnssn"></p>
    <input type="hidden" id="isSsn" value="n">
    <p>생년월일 : <input type="text" name="birth_year" id="year" size="4" readonly value="<?=$birth_year?>">년 <input type="text" name="birth_month" id="month" size="4"  readonly value="<?=$birth_month?>">월 <input type="text" name="birth_day" id="day" size="4" value="<?=$birth_day?>" readonly>일</p>
    <input type="hidden" id="isSsn" value="n">
    <p>성별 : <label>남자<input type="radio" name="gender" value="남자" <?php if($gender == "남자") {?> checked <?php } ?>></label> <label>여자<input type="radio" name="gender" value="여자" <?php if($gender == "여자") {?> checked <?php } ?>></label></p>
    <p>취미 : 
    <label>드라이브<input type="checkbox" name="hobby" value="드라이브" <?php if(in_array('드라이브', $hobby)) { ?> checked <?php } ?>></label> <label>등산<input type="checkbox" name="hobby" value="등산" <?php if(in_array('등산', $hobby)) { ?> checked <?php } ?>></label> <label>게임<input type="checkbox" name="hobby" value="게임" <?php if(in_array('게임', $hobby)) { ?> checked <?php } ?>></label> <label>영화감상<input type="checkbox" name="hobby" value="영화감상" <?php if(in_array('영화감상', $hobby)) { ?> checked <?php } ?>></label> <label>쇼핑<input type="checkbox" name="hobby" value="쇼핑" <?php if(in_array('쇼핑', $hobby)) { ?> checked <?php } ?>></label>
    <p><label>휴대폰 번호 : <input type="text" name="hp" id="hp" value="<?=$hp?>"></label></p>
    <p><label>우편번호 : <input type="text" size="5" name="zipcode" id="sample6_postcode" readonly value="<?=$zipcode?>"></label> <input type="button" value="검색" onclick="sample6_execDaumPostcode()"></p>
    <p><label>주소 : <input type="text" name="address1" id="sample6_address" value="<?=$address1?>"></label></p>
    <p><label>상세주소 : <input type="text" name="address2" id="sample6_detailAddress" value="<?=$address2?>"></label></p>
    <p><label>참고항목 : <input type="text" name="address3" id="sample6_extraAddress" value="<?=$address3?>"></label></p>
    <p><input type="submit" value="수정완료"> <input type="reset" value="다시작성"></p>
    </form>
</body>
</html>