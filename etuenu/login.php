<?php


$response = array();


if (isset($_POST['email']) && isset($_POST['pass']) ) {

    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    include_once("db_connect.php");

    
    $result = mysqli_query($connect,"SELECT * FROM etudiant WHERE  e_mail = '$email' AND pass = '$pass'");

    $num=mysqli_fetch_array($result);

    if ($num){
       
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
