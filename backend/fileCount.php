<?php

include "./dbconn.php";
 



    $sql = "select count(*) as count from community ";
    $result = mysqli_query($connect,$sql);
    
    $myArray = array();
    
    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }
    
    echo json_encode($myArray,true);



?>