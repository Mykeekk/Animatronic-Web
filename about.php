<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto WorkShop</title>
    <link rel="stylesheet" href="./assets/css/Autoworkshop.css">
    <link rel="stylesheet" href="./assets/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="main">
        <?php
        include("./header.php");
        ?>
        <div id="content" class="default-margin">
            <div id="about" class="content-section">
                <h2 class="section-heading">My team</h2>
                <div class="section-sub-heading">We love you guys</div>
                <div class="about-text">
                    Welcome to our cutting-edge robotics and electronics portal, inspired by various highly-intelligence robots all around the world. We’re passionate about making advanced robotics accessible, engaging, and fun! Whether you're a hobbyist, technician, or just a normal person , our platform offers a one-stop destination for exploring, repairing, and learning about advanced AI, robotics and electronics technology.
                    Our team of skilled professionals provides remote support, live  diagnostics, and a full range of services. With easy online booking, transparent service options, and expert care, we bring top-quality robotics items directly to you. Furthermore, we offer a job as a security officier in our chain of restaurants.
                    Join us in celebrating the creative and technical marvels of animatronics — where imagination meets innovation!
                </div>
                <div class="member-list">
                    <div class="member-item">
                        <p class="member-name">Dedicated!</p>
    
                        <img class="member-img" src="./assets/css/img/About/about1.jpg" alt="Name">
                    </div>
                    <div class="member-item">
                        <p class="member-name">Affordable!</p>
    
                        <img class="member-img" src="./assets/css/img//About/about2.jpg" alt="Name">
                    </div>
                    <div class="member-item">
                        <p class="member-name">Flexible!</p>
    
                        <img class="member-img" src="./assets/css/img/About/about3.jpg" alt="Name">
                    </div>
                </div>
            </div>
        </div>

        <?php
        include("./header-footer/product.html");
        include("./header-footer/footer.html");
        ?>
    </div>
    <?php
        include("serviceModal.php");
    ?>
</body>
<script src="./assets/JS/common.js"></script>

</html>