
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
    try {
        
        $userId = $_POST["userId"];
        $userPw = $_POST["userPw"];

        $userPw =  password_hash($userPw,PASSWORD_DEFAULT);
        
        $userNickName = $_POST["userNickName"];
        $userTelegram = $_POST["userTelegram"];
        $userCompany = $_POST["userCompany"];
        $userUrl = $_POST["userUrl"];

        $sql = "select * from users where user_id = '$userId'";
        $result = mysqli_query($connect,$sql);

        if(mysqli_num_rows($result) == 0){
            $sql = "insert into users values('$userId','$userPw','$userNickName','$userCompany','$userUrl','$userTelegram',0)";
            $result = mysqli_query($connect,$sql);
    
            $myArray = array(
                "state" => "ok"
            );
    
        }
        else{
            $myArray = array(
                "state" => "alredy_id"
            );
        }

       
        echo json_encode($myArray,true);
    } catch (\Throwable $th) {
        $myArray = array(
            "state" => "alredy_id123"
        );

        echo json_encode($myArray,true);
    }
}



?>