<?php

$response = array();

 // include db connect
include_once("db_connect.php");





if (isset($_GET['type'])) {


        $type = $_GET['type'];    
    $result = mysqli_query($connect,"UPDATE data SET type = '$type'");

    
    if ($result) {
      
        $response["success"] = 1;
        $response["message"] = "Your data is updated successfully";
        
     
        echo json_encode($response);
    } else {
        
    }
} else {


    if (isset($_GET['type'])){
       
        $nom = $_GET['type'];
    
        $result = mysqli_query($connect,"UPDATE data SET type = '$type' ");
 echo "string";
    }
    if ($result) {
    $response["success"] = 1;
    $response["message"] = "Your data is updated successfully";
    echo json_encode($response);
    } else {
    }
        
        




}
?>
