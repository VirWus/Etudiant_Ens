<?php

$response = array();

 // include db connect
include_once("db_connect.php");





if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['email']) && isset($_GET['matiere'])) {


        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];
        $matiere = $_GET['matiere'];
    
    $result = mysqli_query($connect,"UPDATE data SET nom = '$nom', prenom = '$prenom', email = '$email' , matiere = '$matiere'");

    
    if ($result) {
      
        $response["success"] = 1;
        $response["message"] = "Your data is updated successfully";
        
     
        echo json_encode($response);
    } else {
        
    }
} else {


    if (isset($_GET['nom'])){
       
        $nom = $_GET['nom'];
    
        $result = mysqli_query($connect,"UPDATE data SET nom = '$nom' ");
 echo "string";
    }
    

    if (isset($_GET['prenom'])) {
        
        $prenom = $_GET['prenom'];

    $result = mysqli_query($connect,"UPDATE data SET  prenom = '$prenom' ");

    }

    if (isset($_GET['email'])) {
       
        $email = $_GET['email'];
    
$result = mysqli_query($connect,"UPDATE data SET  email = '$email' ");
    }

    if (isset($_GET['matiere'])) {
        
        $matiere = $_GET['matiere'];

   $result = mysqli_query($connect,"UPDATE data SET matiere = '$matiere' ");

    }




     
    if ($result) {
    $response["success"] = 1;
    $response["message"] = "Your data is updated successfully";
    echo json_encode($response);
    } else {
    }
        
        




}
?>

