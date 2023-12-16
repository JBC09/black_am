<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $myArray;
    $_POST = json_decode(file_get_contents("php://input"),true);
    $userId = $_POST["userId"];
    $userPw = $_POST["userPw"];

    
    $sql = "select user_pw, user_is_admin from users where user_id = '$userId'";
    
    try {
        $result = mysqli_query($connect,$sql);

        $row = mysqli_fetch_assoc($result);
        
    
        if(isset($row["user_pw"])){
            if (password_verify($userPw, $row["user_pw"])) {
                
                if($row["user_is_admin"] == 1){
                    $myArray = array(
                        "state" => "ok"
                    );
                }
                else{
                    $myArray = array(
                        "state" => "not_check_user"
                    );
                }
            }
            else{
                $myArray = array(
                    "state" => "password_error"
                );
            }
           
        }
        else{
            $myArray = array(
                "state" => "id_or_passsword_error"
            );
        }
     
        echo json_encode($myArray,true);
    } catch (\Throwable $th) {
        $myArray = array(
            "state" => "error"
        );
        echo json_encode($myArray,true);
    }
}



?>

