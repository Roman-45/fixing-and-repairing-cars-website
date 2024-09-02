<?php 
include ("connection.php");
if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $data = " INSERT INTO autofix (names,mail,comment) VALUES ('$name','$email','$message')";
   if (mysqli_query($conn,$data)){
    echo 'yolla';
   }     
}
 

?>