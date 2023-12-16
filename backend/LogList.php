<?php

include "./dbconn.php";
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
      
    $start = $_POST["start"];
    $end = $_POST["end"];
    $number = $_POST["number"];

    $start = $start.' 00:00:00';
    $end = $end.' 23:59:59';
    $sql;
    if($number == "check"){
        $sql = "SELECT * FROM searchlog n inner join users m on n.user_id = m.user_id  WHERE search_keyword = 'number' AND search_date BETWEEN '$start' AND '$end' ORDER BY n.pk desc";
     }
    else{
        $sql = "SELECT * FROM searchlog n inner join users m on n.user_id = m.user_id WHERE search_date BETWEEN '$start' AND '$end' ORDER BY  n.pk desc";
    }

    $result = mysqli_query($connect,$sql);

   
    $myArray = array();
    array_push($myArray,$sql);
    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }

    echo json_encode($myArray,true);
   
}
else{
    $sql = "SELECT * FROM searchlog n inner join users m on n.user_id = m.user_id  ORDER BY n.pk desc LIMIT 10";

    $result = mysqli_query($connect,$sql);

    $myArray = array();
    array_push($myArray,$sql);
    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }

    echo json_encode($myArray,true);
}



?>