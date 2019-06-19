<?php

$response = array();


include_once("db_connect.php");


$result = mysqli_query($connect,"SELECT * FROM data ") or die(mysql_error());


if (mysqli_num_rows($result) > 0) {
 
    $response["etuenu"] = array();

    while ($row =  mysqli_fetch_assoc($result)) {

        
        $data = array();
        $data["type"] = $row["type"];


        array_push($response["etuenu"], $data);
    }

    $response["success"] = 1;


    echo json_encode($response);
} else {
    $response["success"] = 0;
    $response["message"] = "No data found";

    echo json_encode($response);
}
?>

