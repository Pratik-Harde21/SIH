<?php

require 'vendor/autoload.php';
$client = new MongoDB\Client;
$db =$client->demo;
$collection=$db->images;
    $cusor =$collection->find();
    foreach($cusor as $img){
        // echo $img["link"] . "\n";
        $x=$img["link"];
        // echo $x;
    }
$x=$img["link"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

  <img src="<?= $x?>" alt="">
  
</body>
</html>

 