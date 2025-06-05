<?php


$user = "root";
$pass = "";
$server = "localhost";
$dbname = "mms1";


try {


    $conn = new PDO("mysql:host=$serverl;dbname=$dbname", $user,$pass);


}catch (PDOException $e) {


    echo "Error: " .$e ->getMessage();
}
?>