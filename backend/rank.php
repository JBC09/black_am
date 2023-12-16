<?php

include "./dbconn.php";
 


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
      
    $type = $_POST["type"];
    
    $sql;

    if($type == "check"){
        $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
        inner join confirmed c on b.pk = c.blacklist_pk GROUP BY b.pk, b.post_userId having cc > 0 order by b.check_number desc, cc desc Limit 10";
    }
    else if($type == "confirmed"){
        $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
        inner join confirmed c on b.pk = c.blacklist_pk GROUP BY b.pk,  b.post_userId having cc > 0 order by cc desc, b.check_number desc Limit 10";
    }
    else{
        $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
        inner join confirmed c on b.pk = c.blacklist_pk GROUP BY b.pk, b.post_userId having cc > 0 order by  b.pk desc Limit 10 ";
    }

    $result = mysqli_query($connect,$sql);

   
    $myArray = array();

    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }

    echo json_encode($myArray,true);
   
}



?>