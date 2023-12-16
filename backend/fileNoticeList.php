<?php

include "./dbconn.php";
 


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
      
    $id = $_POST["id"];

    $sql = "update community set count = count+1
    WHERE pk = $id";

    mysqli_query($connect,$sql);


    $sql = "SELECT * FROM community
    WHERE pk = $id";

    $result = mysqli_query($connect,$sql);

   
    $myArray = array();

    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }

    echo json_encode($myArray,true);
   
}else{
    $sql = "select * from community order by date desc, pk desc";
    $result = mysqli_query($connect,$sql);
    
    $myArray = array();
    
    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }
    
    
    
    echo json_encode($myArray,true);
}


?>