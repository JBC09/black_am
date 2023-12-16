
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
    try {
        
        $userId = $_POST["userId"];
        $userNm = $_POST["userNm"];
        $keyword = $_POST["keyword"];
        $history = $_POST["history"];
        $Todate = date("Y-m-d H:i:s");

        $sql = "insert into searchlog values(NULL,'$userId','$userNm','$keyword','$history','$Todate')";
        $result = mysqli_query($connect,$sql);

        $myArray = array(
            "state" => "ok"
        );

        echo json_encode($myArray,true);
    } catch (\Throwable $th) {
        $myArray = array(
            "state" => "error"
        );

        echo json_encode($myArray,true);
    }
}



?>