<?php


include "./dbconn.php";
 
$sql = "select * from users where user_is_admin = 1";
$result = mysqli_query($connect,$sql);
$myArray = array();

while($row = mysqli_fetch_array($result)){
    $userId = $row["user_id"];
    $sql = "select count(*) as log_count from searchlog where user_id = '$userId'";
    $results = mysqli_query($connect,$sql);
    $rows = mysqli_fetch_assoc($results);
    array_push($row,$rows["log_count"]);


    $sql = "select count(*) as black_count from blacklist where post_userId = '$userId'";
    $results = mysqli_query($connect,$sql);
    $rows = mysqli_fetch_assoc($results);
    array_push($row,$rows["black_count"]);


    $sql = "select count(*) as confirmed_count from confirmed where userId = '$userId'";
    $results = mysqli_query($connect,$sql);
    $rows = mysqli_fetch_assoc($results);
    array_push($row,$rows["confirmed_count"]);


    array_push($myArray,$row);
}



echo json_encode($myArray,true);

?>