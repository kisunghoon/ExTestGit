<?php
    $conn = mysqli_connect("localhost","root","1234","phpproject","3307") or 
    die("데이터 베이스 연결 실패!");

    if(!$conn)
    {
        echo("연결 실패");
    }else{
        echo("연결 성공");
    }

    ?>