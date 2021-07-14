function checkForm() {
    
    let idCheck =  RegExp(/^[a-zA-Z0-9]{6,20}$/);
    let pwCheck = RegExp(/^.*(?=^.{8,20}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/);
  
    if(!idCheck.test($("#userid").val()))
    {
        alert("아이디를 형식에 맞게 입력하세요");
        $("#userid").val("");
        $("#userid").focus();
        return false;
    }


    if(!pwCheck.test($("#userpw").val()))
    {
        alert("아이디를 형식에 맞게 입력하세요");
        $("#userpw").val("");
        $("#userpw").focus();
        return false;
    }
    return true;

}