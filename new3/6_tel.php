<?php
    $result = "";
    $lines =@file("tel.txt") or $result = "파일을 읽을 수 없습니다.";
   
    if($lines != null){
        for($i=0;$i<count($lines);$i++){
            $result .="<tr>";
            $arr = explode(",", $lines[$i]);
            $result .="<td>".($i+1)."</td>";
            for($j=0;$j<3;$j++){
                $result .= "<td>{$arr[$j]}</td>";
            }
            $result .="</tr>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>연락처</title>
    <style>
        table {width:600px;border-collapse:collapse;}
        th,td {height:30px;border:1px solid red;}
    </style>
</head>
<body>
    <h2>연락처</h2>

    <table>
        <tr>
            <th>번호</th>
            <th>이름</th>
            <th>주소</th>
            <th>연락처</th>
        </tr>
        <p><?=$result?></p>
    </table>
   
</body>
</html>