
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
  
        
    $pk = $_POST["pk"];
    
    $sql;

    if($_POST["key"] == "notice"){
        $sql = "delete from notice where pk = $pk";
    }
    else{
        $sql = "delete from community where pk = $pk";
    }
  
    mysqli_query($connect,$sql);

    $myArray = array(
        "state" => "ok"
    );


    echo json_encode($myArray,true);
 
    
}



?>