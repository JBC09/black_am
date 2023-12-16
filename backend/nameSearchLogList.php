<?php

include "./dbconn.php";
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"), true);
      
    $search = $_POST["search"];
    $type = $_POST["type"];
    $number = $_POST["number"];

    $sql;

    if($number == "check"){
        if($type == "id"){
            $sql = "SELECT * FROM  searchlog n inner join users m on n.user_id = m.user_id having search_keyword = 'number' AND n.user_id LIKE '%$search%' ORDER BY n.pk desc";
        }
        else{
            $sql = "SELECT * FROM  searchlog n inner join users m on n.user_id = m. user_id  having search_keyword = 'number' AND n.user_nickname LIKE '%$search%' ORDER BY n.pk desc";
        }
    }
    else{
        if($type == "id"){
            $sql = "SELECT * FROM  searchlog n inner join users m on n.user_id = m.user_id  having n.user_id LIKE '%$search%' ORDER BY n.pk desc";
        }
        else{
            $sql = "SELECT * FROM  searchlog n inner join users m on n.user_id = m.user_id  having n.user_nickname LIKE '%$search%' ORDER BY n.pk desc";
        }
    }

    $result = mysqli_query($connect, $sql);

    $myArray = array();

    array_push($myArray, $sql);

    while($row = mysqli_fetch_array($result)){
        array_push($myArray, $row);
    }

    echo json_encode($myArray, true);
   
}

?>
