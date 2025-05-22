<?php
    include_once('config.php');

    if(isset($_POST['submit'])){
    $name = $_POST['name'];
     $surname = $_POST['surname'];
    $username = $_POST['username'];
     $email = $_POST['email'];
    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);



    if(empty($name)  || empty($surname)  || empty($username)  || empty($password)){
        echo "you need to fill all the feilds";
    }
    else{
        $sql = "SELECT username FROM users WHERE username=:username";

        $tempSQL = $conn -> prepare($sql);
        $tempSQL ->bindParam(':username', $username);
        $tempSQL ->execute();

        if($tempSQL -> rowCount() >0){
            echo"Username exists!";
            header("refresh:2; url= signup.php");
        }
        else{
            $sql = "INSERT INTO users (name, surname, username, email, password) VALUES (:name, :surname, :username, :email, :password";
            $insertSQl = $conn -> prepare($sql);
            $insertSQl ->bindParam(':name', $name);
            $insertSQl ->bindParam(':surnname', $surname);
            $insertSQl ->bindParam(':username', $username);
            $insertSQl ->bindParam(':email', $email);
            $insertSQl ->bindParam(':password', $password);


            $insertSQl -> execute();

            echo "Data saved successfuly";
            header("refresh:2, url=login.php");
        }
    }
    }










?>