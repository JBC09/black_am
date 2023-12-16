
<?php
include "./dbconn.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
  
        
    $pk = $_POST["pk"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $type = $_POST["type"];
    
    $sql;

    if($type == "notice"){
        $sql = "update community set title = '$title', content = '$content' where pk = $pk";
    }
    else{
        $sql = "update notice set title = '$title', content = '$content'  where pk = $pk";
    }
   
  
    mysqli_query($connect,$sql);

    $myArray = array(
        "state" => "ok"
    );
    

    echo json_encode($myArray,true);
 
    
}



?>