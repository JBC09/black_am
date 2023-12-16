
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
    try {
        
        
        $PostUserId = $_POST["PostUserId"];
        $userId = $_POST["userId"];
        $userNm = $_POST["userNm"];
        $userNumber = $_POST["userNumber"];
        $userBank = $_POST["userBank"];
        $userAccount = $_POST["userAccount"];
        $userIp = $_POST["userIp"];
        $desc = $_POST["desc"];
        $date = date("Y-m-d");
        $type = $_POST["type"];

        $sql = "insert into blacklist values(NULL,'$PostUserId','$userId','$userNm','$userNumber','$userBank','$userAccount','$userIp','$type','$desc','$date',0,1,1)";
        $result = mysqli_query($connect,$sql);

        $sql = "select max(pk) as max from blacklist";

        $result = mysqli_query($connect,$sql);

        $row = mysqli_fetch_assoc($result);

        $data = $row["max"];
        
        $sql2 = "insert into confirmed values(NULL,$data,'등록인');";

        mysqli_query($connect,$sql2);
        

        $myArray = array(
            "state" => "ok"
        );

        echo json_encode($myArray,true);
    } catch (\Throwable $th) {
        $myArray = array(
            "state" => "alredy_id"
        );

        echo json_encode($myArray,true);
    }
}



?>