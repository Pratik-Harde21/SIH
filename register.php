<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $home= "index_main";
   
    if(empty($username)){
        die("Empty or invalid email address");
    }
    if(empty($password)){
        die("Enter your password");
    }

    require 'vendor/autoload.php';
    $con = new MongoDB\Client;
    // Select Database
    if($con){
        $db = $con->demo;
        // Select Collection
        $collection = $db->signup;   // you may use 'admin' instead of 'Admin'
        $qry = array("username" => $username, "password" => $password);
        $result = $collection->findOne($qry);

        if(!empty($result)){
            header("Location: $home.php");
            // echo "You are successfully loggedIn";
        }else{
            echo "Wrong combination of username and password";
        }
    }else{
        die("Mongo DB not connected!");
    }
}
?>