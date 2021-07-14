<?php
    $result = "";
    $lines = @file("tel.txt") or $result ="파일을 읽을 수 없습니다.";

    if($lines !=null){
        for($i=0;$i<count($lines);$i++){
           $result .="<tr>";
          
           $arr = explode(",",$lines[$i]);
           $result .= "<td>".($i+1)."</td>";
           for($j=0;$j<3;$j++)
           {
               $result .= "<td> {$arr[$j]}</td>";
           }
           $result .="</tr>";
            // $result .=$lines[$i]."<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {width:600px;border-collapse:collapse;}
    th,td {height: 40px;border: 1px solid red;}
    </style>
</head>
<body>
   
    <table border="1">
    <tr>
        <th>이름</th>
        <th>주소</th>
        <th>연락처</th>
        <th>전화번호</th>
        <p><?=$result?></p>
    </tr>
       
    </table>
   
</body>
</html>