<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="js/regist.js"></script>
</head>
<body>
    <h2>회원가입</h2>
    <form method="post" action="php_08_ok.php" onsubmit="return checkForm()">
    <p><label>아이디 : <input type="text" name="userid" maxlength="20" id="userid"></label></p>
    <p><label>비밀번호 : <input type="password" name="userpw" maxlength="20" id="userpw"></label></p>
    <p><label>비밀번호 확인 : <input type="password" name="userpw_re" maxlength="20" id="userpw_re">
    <p><label>이름 : <input type="text" name="name" id="name"></label></p>
    <p><label>이메일 : <input type="text" name="email" id="email"></label></p>
    <p>주민등록번호 <input type="text" name="ssn1" id="ssn1" size="6" maxlength="6"> - <input type="password" name="ssn2" id="ssn2" size="7" maxlength="7"> <input type="button" value="주민등록번호 검증" id="btnssn"></p>
    <p>생년월일 : <input type="text" name="birth_year" id="year" size="4" readonly>년 <input type="text" name="birth_month" id="month" size="4"  readonly>월 <input type="text" name="birth_day" id="day" size="4" readonly>일</p>
    <input type="hidden" id="isSsn" value="n">
    <p>성별 : <label>남자<input type="radio" name="gender" value="남자" checked></label> <label>여자<input type="radio" name="gender" value="여자"></label></p>
    <p>취미 : 
    <label>드라이브<input type="checkbox" name="hobby[]" value="드라이브"></label> <label>등산<input type="checkbox" name="hobby[]" value="등산"></label> <label>게임<input type="checkbox" name="hobby[]" value="게임"></label> <label>영화감상<input type="checkbox" name="hobby[]" value="영화감상"></label> <label>쇼핑<input type="checkbox" name="hobby[]" value="쇼핑"></label>
    <p><label>휴대폰 번호 : <input type="text" name="hp" id="hp"></label></p>
    <p><label>우편번호 : <input type="text" size="5" name="zipcode" id="sample6_postcode" readonly></label> <input type="button" value="검색" onclick="sample6_execDaumPostcode()"></p>
    <p><label>주소 : <input type="text" name="address1" id="sample6_address"></label></p>
    <p><label>상세주소 : <input type="text" name="address2" id="sample6_detailAddress"></label></p>
    <p><label>참고항목 : <input type="text" name="address3" id="sample6_extraAddress"></label></p>
    <p><input type="submit" value="가입완료"> <input type="reset" value="다시작성"></p>
    </form>
</body>
</html>