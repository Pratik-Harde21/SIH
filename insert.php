<?php

require 'vendor/autoload.php';
$client = new MongoDB\Client;
$db = $client->demo;
$collection = $db->signup;
if($_POST){

$insert = array(
'username'=> $_POST['username'],
'email'=> $_POST['email'],
'password'=> $_POST['password']
);

if($collection-> insertOne($insert)){


echo"Inserted";
}
else{
echo"Try Again";
}
}
else{
 echo"No data";
}
?>