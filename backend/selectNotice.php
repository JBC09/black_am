<?php

include "./dbconn.php";
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);

    $id = $_POST["id"];
    $type = $_POST["type"];



    if($type == "notice"){
        $sql = "SELECT title,content FROM community WHERE pk = '$id'";
    }
    else{
        $sql = "SELECT title,content FROM notice WHERE pk = '$id'";
    }

    $result = mysqli_query($connect,$sql);

   
    $myArray = array();

    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }

    echo json_encode($myArray,true);
   
}


?>