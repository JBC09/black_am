
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
  
        
    $userId = $_POST["userId"];
    
    $sql;

    if($_POST["key"] == "black"){
        $sql = "update blacklist set confirmed = 1 where pk = $userId";
        $sql2 = "insert into confirmed values(NULL,$userId,'관리자');";
        mysqli_query($connect,$sql2);
    }
    else{
        $sql = "update users set user_is_admin = 1 where user_id = '$userId'";
    }
  
    mysqli_query($connect,$sql);

    $myArray = array(
        "state" => "ok"
    );

    echo json_encode($myArray,true);
 
}



?>