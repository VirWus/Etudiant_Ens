<?php

$response = array();

 // include db connect
include_once("db_connect.php");





if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['email']) && isset($_GET['annee']) && isset($_GET['specialite']) && isset($_GET['groupe'])) {


        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];
        $annee = $_GET['annee'];
        $specialite = $_GET['specialite'];
        $groupe = $_GET['groupe'];
    
    $result = mysqli_query($connect,"UPDATE data SET nom = '$nom', prenom = '$prenom', email = '$email' , specialite = '$specialite', groupe = '$groupe'");

    
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


    if (isset($_GET['annee'])) {
        
        $annee = $_GET['annee'];

    $result = mysqli_query($connect,"UPDATE data SET  annee = '$annee' ");

    }


    if (isset($_GET['specialite'])) {
        
        $specialite = $_GET['specialite'];

   $result = mysqli_query($connect,"UPDATE data SET specialite = '$specialite' ");

    }


    if (isset($_GET['groupe'])) {
       
        $groupe = $_GET['groupe'];
  
$result = mysqli_query($connect,"UPDATE data SET groupe = '$groupe'");
    }



     
    if ($result) {
    $response["success"] = 1;
    $response["message"] = "Your data is updated successfully";
    echo json_encode($response);
    } else {
    }
        
        




}
?>
