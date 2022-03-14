<?php

require 'vendor/autoload.php';
$client = new MongoDB\Client;
$db =$client->demo;
$collection=$db->b0001;
    $cusor =$collection->find();
    foreach($cusor as $img){
        // echo $img["link"] . "\n";
        $id=$img["_id"];
        // echo $x;
        if($id==1){
            $img1=$img["link"];
        }
        if($id==2){
            $img2=$img["link"];
        }
        if($id==3){
            $t=$img["link"];
        }
        if($id==4){
            $img3=$img["link"];
            $desc1=$img["description"];
        }
        if($id==5){
            $img4=$img["link"];
            $desc2=$img["description"];
        }
        if($id==6){
            $img5=$img["link"];
            $desc3=$img["description"];
        }
        if($id==7){
            $vid=$img["link"];
        }
        if($id==8){
            $place=$img["place"];
        }

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./CSS/style.css"> -->
    <link rel="stylesheet" href="./CSS/template.css">
    <title>Document</title>
</head>

<body>
    <nav id="navbar">
        <!-- <h3 class="head"><span class="head2">T</span>RAVELER</h3> -->
        <ul>
            <li class="item"><a href="/index_main.html">Home</a></li>
            <li class="item"><a href="#second">How it works</a></li>
            <li class="item"><a href="/aboutUs.html">About Us</a></li>
            <li class="item"><a href="/contact.html">Contact Us</a></li>
        </ul>
        <button href="/login.html" id="btn1">Login/ Signup</button>
    </nav>
    <section>

        <div id="img">
            <!-- <img src="./Images/babulnath_template.jpg" alt=""> -->
            <img src="<?= $img1?>" alt="">
            <!-- <img src="https://www.motormemos.com/wp-content/uploads/2019/11/post16478.jpg" alt=""> -->
        </div>
        <div id="img1">
            <!-- <img src="./Images/lord-shive-removebg-preview.png" alt=""> -->
            <img src="<?= $img2?>" alt="">
            <!-- <img src="https://serving.photos.photobox.com/8924753426f0338dda8db6b7a716f0993bbf43f40883c1afc62d8870d67344e8b2025e6d.jpg" alt=""> -->
        </div>
        <div id="heading">
            <h1><?= $place?></h1>
        </div>
    </section>

    <section id="vtour">
        <div>

            <iframe src="<?= $t?>" frameborder="0" scrolling="no"
                allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" oallowfullscreen="true"
                msallowfullscreen="true"></iframe>
        </div>
    </section>


    <section id="information">
        <div class="imginfo">
            <div>
                <!-- <img src="./Images/info1.jpg" alt="" width="990px"> -->
                <!-- <img src="./Images/info1.jpg" alt="" width="990px" > -->
                <img src="<?= $img3?>" alt="" width="990px" >
                <!-- <img src="https://serving.photos.photobox.com/92997003c394226f4ada753bf0f460b16c7ebda7384896f60ecd9c7e8367ea69a5a44254.jpg" alt="" width="990px"> -->
            </div>
            <div class="para">
                <p><?= $desc1?></p>
            </div>
        </div>
        <div class="imginfo">
            <div class="para">
                <p><?= $desc2?></p>
            </div>
            <div>
                <img src="<?= $img4?>" alt="" width="990px" height="610px">
            </div>
        </div>
        <div class="imginfo">
            <div>
                <img src="<?= $img5?>" alt="" width="990px" height="650px">
            </div>
            <div class="para">
                <p><?= $desc3?></p>
            </div>
        </div>
    </section>

    <section id="video">
        <!-- <video id="video" muted loop autoplay>  
            <source src="./Images/Sequence 01.mp4" type="video/mp4">  
        </video> 
        <div class="stretch">
            <div class="codecontainer">
            <h1>Some heading</h1>
            <p>Content Goes Here..</p>
            </div>
        </div> -->
        <div class="hero-wrapper">
            <figure>
                <video loop muted="muted" autoplay>
                    <!-- <source src="<?= $vid?>" /> -->
                    <!-- <source src="https://www.kapwing.com/videos/622f6b9f9217cd010ceec5ad" /> -->
                    <source src="./Images/3.mp4" />
                </video>
                <div class="overlay"></div>
            </figure>
        </div>
        <div class="stretch">
            <div class="codecontainer">
                <h1>Some heading</h1>
                <p>Content Goes Here..</p>
            </div>
        </div>
    </section>
</body>

</html>