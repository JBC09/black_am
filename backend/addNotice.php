
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
    try {
        
        
        $title = $_POST["title"];
        $content = $_POST["content"];
        $date = $_POST["date"];

        $sql = "insert into notice values(NULL,'$title','$content','$date',0)";
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