<?php

include "./dbconn.php";
 


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
      
    $id = $_POST["id"] * 10;
    $limit = $_POST['id'] + 10;

    $sql = "SELECT * FROM notice order by pk desc Limit $limit OFFSET  $id ";

    $result = mysqli_query($connect,$sql);

   
    $myArray = array();

    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }

    echo json_encode($myArray,true);
   
}


?>