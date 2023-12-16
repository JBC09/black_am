
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
  
        
    $userId = $_POST["userId"];
    $type = $_POST["type"];
    
    $sql;

    if($type == "delete" ){
        $sql = "update users set user_is_admin = 2 where user_id = '$userId'";
    }
    else if($type == "no"){
        $sql = "delete from users where user_id = '$userId'";
    }
    else if($type == "ok"){
        $sql = "update users set user_is_admin = 1 where user_id = '$userId'";
    }
  
    mysqli_query($connect,$sql);

    $myArray = array(
        "state" => "ok"
    );
    

    echo json_encode($myArray,true);

}



?>