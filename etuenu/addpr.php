<?php

$response = array();

 // include db connect
include_once("db_connect.php");




if (isset($_GET['type']) && isset($_GET['nom'])) {

        $type = $_GET['type'];  
        $nom = $_GET['nom'];

    $result = mysqli_query($connect,"UPDATE etudiant SET pr = '$type' WHERE nom = '$nom'");

    
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
