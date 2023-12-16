<?php

include "./dbconn.php";
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
      
    $search = $_POST["search"];
    $type = $_POST["type"];
    $number = $_POST["number"];

    $sql;

    if($number == "user"){
        if($type == "id"){
            $sql = "select * from users where user_is_admin = 1 AND user_id LIKE '%$search%'";
        }
        else{
            $sql = "select * from users where user_is_admin = 1 AND user_nickname LIKE '%$search%'";
        }

        
   
        $result = mysqli_query($connect,$sql);
        $myArray = array();

        while($row = mysqli_fetch_array($result)){
            $userId = $row["user_id"];
            $sql = "select count(*) as log_count from searchlog where user_id = '$userId'";
            $results = mysqli_query($connect,$sql);
            $rows = mysqli_fetch_assoc($results);
            array_push($row,$rows["log_count"]);


            $sql = "select count(*) as black_count from blacklist where post_userId = '$userId'";
            $results = mysqli_query($connect,$sql);
            $rows = mysqli_fetch_assoc($results);
            array_push($row,$rows["black_count"]);


            $sql = "select count(*) as confirmed_count from confirmed where userId = '$userId'";
            $results = mysqli_query($connect,$sql);
            $rows = mysqli_fetch_assoc($results);
            array_push($row,$rows["confirmed_count"]);


            array_push($myArray,$row);

           
        }
        while($row = mysqli_fetch_array($result)){
            array_push($myArray,$row);
        }
    
        echo json_encode($myArray,true);

    }
    else if($number == "join"){
        if($type == "id"){
            $sql = "select * from users where user_is_admin = 0 AND  user_id LIKE '%$search%'";
        }
        else{
            $sql = "select * from users where user_is_admin = 0 AND user_nickname    LIKE '%$search%'";
        } 


        $result = mysqli_query($connect,$sql);

   
        $myArray = array();
    
        while($row = mysqli_fetch_array($result)){
            array_push($myArray,$row);
        }
    
        echo json_encode($myArray,true);
    }
    else{
        if($type == "id"){
            $sql = "select * from users where user_is_admin = 2 AND user_id  LIKE '%$search%'";
        }
        else{
            $sql = "select * from users where user_is_admin = 2 AND user_nickname LIKE '%$search%'";
        } 


        $result = mysqli_query($connect,$sql);

   
        $myArray = array();
    
        while($row = mysqli_fetch_array($result)){
            array_push($myArray,$row);
        }
    
        echo json_encode($myArray,true);
    }


   
}



?>