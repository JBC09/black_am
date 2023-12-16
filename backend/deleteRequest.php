
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
  
        
    $userId = $_POST["userId"];
    
    $sql;

    if($_POST["key"] == "delete"){
        $sql = "update blacklist set is_check = 0 where pk = $userId";
    }
    else{
        $sql = "update blacklist set is_check = 1 where pk = $userId";
    }
   
  
    mysqli_query($connect,$sql);

    $myArray = array(
        "state" => "ok"
    );
    

    echo json_encode($myArray,true);
 
    
}



?>