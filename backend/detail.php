
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
  
        
    $id = $_POST["id"];

    $sql = "update community set count = count+1
    WHERE pk = $id";

    mysqli_query($connect,$sql);

    $sql = "select * from community where pk = $id";
   
  
    $result = mysqli_query($connect,$sql);

    $myArray = array();


    $row = mysqli_fetch_assoc($result);

    array_push($myArray,$row);


    echo json_encode($myArray,true);
 
}



?>