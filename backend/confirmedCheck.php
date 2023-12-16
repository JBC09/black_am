
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
  
        
    $pk = $_POST["pk"];
    $userId = $_POST["userId"];
    
    $sql = "select * from confirmed where blackList_pk = $pk AND userId = '$userId';";
    
    $result = mysqli_query($connect,$sql);

    if(mysqli_num_rows($result) == 0){
   
        $myArray = array(
            "state" => "add"
        );
        

        echo json_encode($myArray,true);
    }
    else{
        $myArray = array(
            "state" => "delete"
        );
         echo json_encode($myArray,true);
    }

 
}



?>