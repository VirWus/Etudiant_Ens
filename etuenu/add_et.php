<?php


$response = array();


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['annee']) && isset($_POST['specialite']) && isset($_POST['group']) ) {

    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $annee = $_POST['annee'];
    $specialite = $_POST['specialite'];
    $group = $_POST['group'];


    include_once("db_connect.php");

    
    $result = mysqli_query($connect,"INSERT INTO etudiant VALUES(NULL,'$nom','$prenom','$nom','$email','$annee','$specialite','$group',0,0)");


    if ($result){
       
        $response["success"] = 1;
        $response["message"] = "Your registration is successful";

        
        echo json_encode($response);
    } else {
       
        $response["success"] = 0;
        $response["message"] = "The system detects an error, please try again";
        
      
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Please complete the action before starting your request";

 
    echo json_encode($response);
}

?>
