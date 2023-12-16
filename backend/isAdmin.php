<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $myArray;
    $_POST = json_decode(file_get_contents("php://input"),true);
    $userId = $_POST["userId"];
    
    if($userId == "king"){
        $myArray = array(
            "state" => "ok"
        );
        echo json_encode($myArray,true);
    }
    else if($userId == "king2"){
        $myArray = array(
            "state" => "ok2"
        );

        echo json_encode($myArray,true);
    }
    else{
        $myArray = array(
            "state" => "no"
        );
        echo json_encode($myArray,true);
    }
}



?>


