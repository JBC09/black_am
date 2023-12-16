<?php

// $file = $_GET['file'];
// $mysqli = new mysqli('127.0.0.1', 'root', '비번', '테이블명');



include "./dbconn.php";
 
// header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = DB_DATA.xls" );     //filename = 저장되는 파일명을 설정합니다.
header( "Content-Description: PHP4 Generated Data" );


$sql = $_GET["sql"];
// 엑셀 파일로 만들고자 하는 데이터의 테이블을 만듭니다.
$EXCEL_FILE = "
<table border='1'>
    <tr>
    <th>아이디</th>
    <th>업체명</th>
    <th>URL</th>
    <th>닉네임</th>
    <th>keyword</th>
    <th>검색시간</th>
    </tr>
";

$sql = $_GET["sql"];

$res = mysqli_query($connect,$sql);

// DB 에 저장된 데이터를 테이블 형태로 저장합니다.
while ($row = mysqli_fetch_assoc($res)) {
$EXCEL_FILE .= "
    <tr>
       <td>".$row["user_id"]."</td>
       <td>".$row["user_company"]."</td>
       <td>".$row["user_url"]."</td>
       <td>".$row["user_nickname"]."</td>
       <td>".$row["search_history"]."</td>
       <td>".$row["search_date"]."</td>
    </tr>
";
}

$EXCEL_FILE .= "</table>";

// 만든 테이블을 출력해줘야 만들어진 엑셀파일에 데이터가 나타납니다.
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
echo $EXCEL_FILE;

?>