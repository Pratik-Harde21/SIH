<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/three.min.js"></script>
    <script src="js/panolens.min.js"></script>
    <!-- <script src="js/login.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/ccc8dec2b5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
    <title>Virtual Quest</title>
</head>
<body>
    <nav id="navbar">
        <!-- <h3 class="head"><span class="head2">T</span>RAVELER</h3> -->
        <ul>
            <li class="item"><a href="/index.html">Home</a></li>
            <li class="item"><a href="#second">How it works</a></li>
            <li class="item"><a href="/aboutUs.html">About Us</a></li>
            <li class="item"><a href="/contact.html">Contact Us</a></li>
        </ul>
        <!-- <a href=""><button href="/login.html" id="btn1">Login/ Signup</button></a> -->
        <a href="login.php"> <button id="btn1">Login/ Signup</button></a>
        <!-- <button href="/login.html" id="btn1">Login/ Signup</button> -->
    </nav>
    <div id="carouselExampleCaptions" class="my-carousel carousel slide" data-bs-interval="false" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h1 class="imp">Welcome To India</h1>
                <img src="Images/temple1.jpg" class="d-block w-100" alt="..." width="1902" height="965px"  style="position: relative;">
                <h1 class="imp-sub">Varanasi</h1>
            </div>
            <div class="carousel-item">
                <h1 class="imp-sub">Vailankanni</h1>
                <img src="Images/church.jpg" class="d-block w-100" alt="..." width="1902" height="965px">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <h1 class="imp-sub">Amritsar</h1>
                <img src="Images/Golden Temple.jpg" class="d-block w-100" alt="..." width="1902" height="965px">
                <div class="carousel-caption d-none d-md-block">
                </div>
        </div>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <section class="ten">
        <div class="end text-center">
            <div class="add">
                <h3>Office Address</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, nihil.</p>
            </div>
            <div class="add">
                <h3>Follow Us</h3>
                <div class="logo">
                    <img src="images/twitter.png" alt="" height="30" width="30">
                    <img src="images/insta.png" alt="" height="30" width="30">
                    <img src="images/linkedin.png" alt="" height="30" width="30">
                </div>
                <div class="logo">
                    <img src="images/fb.png" alt="" height="30" width="30">
                    <img src="images/telegram.png" alt="" height="30" width="30">
                </div>
            </div>
            <div class="add">
                <h3>Contact Us</h3>
                <p>+ 123 456 789</p>
                <p>travelly@gmail.com</p>
                <p>travelly.com</p>
            </div>
        </div>
    </section>
    <!-- <iframe id="img" allowfullscreen src="https://pchen66.github.io/Panolens/examples/panorama_image.html" width="70%" height="auto"></iframe> -->
    <!-- <iframe id="img" allowfullscreen src="https://momento360.com/e/u/6a1cfc30957b4e2f83431c64d7eb7a91?utm_campaign=embed&utm_source=other&heading=-391.34&pitch=16.94&field-of-view=68.5&size=medium" width="70%" height="500px"></iframe> -->
    <!-- <iframe allowfullscreen src="img/PANO_20220219_113831_0.jpg" width="90%" height="800px"></iframe> -->
    <!-- <script>

        const panorama = new PANOLENS.ImagePanorama( 'asset/textures/equirectangular/field.jpg' );
        const viewer = new PANOLENS.Viewer();
        viewer.add( panorama );
        
        </script> -->
</body>
</html>