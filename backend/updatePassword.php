
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
  
        
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $newPass = $_POST["newPass"];
    $sql = "select user_pw from users where user_id = '$id'";
    
  
    $result = mysqli_query($connect,$sql);

    $row = mysqli_fetch_assoc($result);
    $myArray;



    if (password_verify($pass, $row["user_pw"])) {
        $newPasss =  password_hash($newPass,PASSWORD_DEFAULT);
        $sql = "update users set user_pw = '$newPasss' where user_id = '$id'";
        $result = mysqli_query($connect,$sql);

        $myArray = array(
            "state" => "ok"
        );
    }
    else{
        $myArray = array(
            "state" => "no"
        );
    }  
      echo json_encode($myArray,true);
    
 
}



?>