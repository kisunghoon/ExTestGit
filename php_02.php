<?php
    $conn = mysqli_connect("localhost","root","1234","phpproject","3307") or 
    die("데이터 베이스 연결 실패!");

    if(!$conn)
    {
        echo("연결 실패");
    }else{
        $sql="
        INSERT INTO tb_member (mem_userid,mem_pass,mem_name,mem_email,mem_ssn,mem_birthday,
        mem_gender,mem_hobby,mem_hp,mem_zipcode,mem_address1,mem_address2,mem_address3) 
        VALUES ('orange',PASSWORD('1111'),'김귤','water@naver.com','32422112333','1962241','남자','게임',
        '010-4444-3333','12345','서울특별시 구로구','222-23','11호');";
    }
    $result=mysqli_query($conn,$sql);
    echo "{$result} 정상적으로 insert 되었다."
    ?>