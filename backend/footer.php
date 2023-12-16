<?php

include "./dbconn.php";
 


$_POST = json_decode(file_get_contents("php://input"),true);
    
$today = date("Y-m-d");



$start = $today.' 00:00:00';
$end = $today.' 23:59:59';


$sql = "select count(*) as count1 from searchlog where search_date BETWEEN '$start' AND '$end'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

$myArray = array();

array_push($myArray,$row);

$sql = "select count(*) as count2 from searchlog";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

$row["count2"] += 8999528;
array_push($myArray,$row);

$sql = "select count(*) as count3 from blacklist where black_date = '$today'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);
array_push($myArray,$row);

$sql = "select count(*) as count4 from blacklist";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);
$row["count4"] += 529384;
array_push($myArray,$row);

echo json_encode($myArray,true);


?>