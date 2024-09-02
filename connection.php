<?php
$host ='localhost';
$user='root';
$pass= '';
$dbname ='mydb';

$conn = mysqli_connect('localhost', $user, $pass, $dbname);

if ($conn -> connect_error) {
    die('went wrong'. mysqli_connect_error());
   
}
else{
    echo 'twigendele';
}
?>