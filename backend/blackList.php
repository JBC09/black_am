<?php

include "./dbconn.php";
 


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_POST = json_decode(file_get_contents("php://input"),true);
      
    $search = $_POST["search"];
    $filter = $_POST["filter"];

    $filter = "black_".$filter;
    $sql;
    if($filter == "black_account"){
        $sql = "SELECT b.*, COUNT(c.blacklist_pk) AS cc FROM blacklist b INNER JOIN confirmed c ON b.pk = c.blacklist_pk WHERE 
        b.is_check = 1 AND (black_number LIKE '%$search%' OR black_ip LIKE '%$search%' OR black_account LIKE '%$search%') GROUP BY b.pk  ORDER BY cc DESC, b.check_number DESC, b.pk DESC";
        
    }else{
        $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
        inner join confirmed c on b.pk = c.blacklist_pk GROUP BY b.pk having b.is_check = 1 AND $filter LIKE '%$search%'  ORDER BY cc desc,  b.check_number desc,  b.pk desc";
    }




    $result = mysqli_query($connect,$sql);

        
   
    $myArray = array();

    while($row = mysqli_fetch_array($result)){
        $pk = $row["pk"];
        $sql = "update blacklist set check_number = check_number + 1 where pk = $pk";
        mysqli_query($connect,$sql);
        array_push($myArray,$row);
    }

    echo json_encode($myArray,true);
   
}else{
    $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
    inner join confirmed c on b.pk = c.blacklist_pk GROUP BY b.pk,c.blacklist_pk having b.is_check = 1 ORDER BY b.black_date desc LIMIT 10";
    


    $result = mysqli_query($connect,$sql);
    
    
    $myArray = array();
    
    while($row = mysqli_fetch_array($result)){
        array_push($myArray,$row);
    }
    
    
    
    echo json_encode($myArray,true);
}


?>