<?php
session_start();
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$db = $client->demo;
$users = $db->signup;

$username = $_SESSION["username"];
//echo "$uname";
$qry = array("username"=> $username);
//echo "$qry";
$result = $users->findOne($qry);
//print_r($result)
?>