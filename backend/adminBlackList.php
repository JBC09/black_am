<?php

include "./dbconn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_POST = json_decode(file_get_contents("php://input"), true);
    $sql;

    $type = $_POST["type"];
    $search = $_POST["search"];

    if ($_POST["check"] == "ok") {
        if ($type == "no") {
            $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
            inner join confirmed c on b.pk = c.blacklist_pk GROUP BY b.pk,c.blacklist_pk  having b.is_check = 1 ORDER BY black_date desc LIMIT 10";
        } else {
            if ($type == "account") {
                $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
                inner join confirmed c on b.pk = c.blacklist_pk having b.is_check = 1 AND b.black_account LIKE '%$search%' GROUP BY b.pk,c.blacklist_pk ORDER BY black_date desc ";
            } else if ($type == "phone") {
                $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
                inner join confirmed c on b.pk = c.blacklist_pk having b.is_check = 1 AND b.black_number LIKE '%$search%' GROUP BY b.pk,c.blacklist_pk ORDER BY black_date desc ";
            } else {
                $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
                inner join confirmed c on b.pk = c.blacklist_pk having b.is_check = 1 AND b.black_name LIKE '%$search%' GROUP BY b.pk,c.blacklist_pk ORDER BY black_date desc ";
            }
        }

    } else {
        if ($type == "no") {
            $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
            inner join confirmed c on b.pk = c.blacklist_pk GROUP BY b.pk,c.blacklist_pk  having b.is_check = 0 ORDER BY black_date desc LIMIT 10";
        } else {
            if ($type == "account") {
                $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
                inner join confirmed c on b.pk = c.blacklist_pk having b.is_check = 0 AND b.black_account LIKE '%$search%' GROUP BY b.pk,c.blacklist_pk ORDER BY black_date desc ";
            } else if ($type == "phone") {
                $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
                inner join confirmed c on b.pk = c.blacklist_pk having b.is_check = 0 AND b.black_number LIKE '%$search%' GROUP BY b.pk,c.blacklist_pk ORDER BY black_date desc ";
            } else {
                $sql = "SELECT b.*, count(c.blacklist_pk) as cc FROM blacklist b
                inner join confirmed c on b.pk = c.blacklist_pk having b.is_check = 0 AND b.black_name LIKE '%$search%' GROUP BY b.pk,c.blacklist_pk ORDER BY black_date desc ";
            }
        }
    }
    $result = mysqli_query($connect, $sql);

    $myArray = array();

    while ($row = mysqli_fetch_array($result)) {
        array_push($myArray, $row);
    }

    echo json_encode($myArray, true);

}

?>
