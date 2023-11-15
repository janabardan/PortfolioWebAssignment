<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>
    <head>
        <title>Gallery
        </title>
        <link rel = "stylesheet" type = "text/css" href="../css/portfolio.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    </head>
    <body>
       
    <nav class="navbar">
    <div class="left-content" style="margin-left:1%">
        <div class="dropdown-menu" style="padding-left: 1%;">
            <span class="material-symbols-outlined" style="color: #f4f0f0;">menu</span>
            <span class="menu-text" style="color: #f4f0f0;">MENU</span>
            <div class="dropdown-content menu-rtl">
                <ul>
                    <li class="menu-item"><a href="portfolio.php">Resume</a></li>
                    <li class="menu-item"><a href="contact.php">Contact Me</a></li>
                    <li class="menu-item"><a href="gallery.php">Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="float:right; margin-right:1%">
        <?php
        if (isset($_SESSION["username"])) {
            echo '<span style="margin-left: 0%; padding-bottom: 0%; margin-bottom: 0%; color:#f4f0f0;">Welcome, ' . $_SESSION["fullname"] . '! ';
            echo '<br><a href="../be/logout.php" style="text-decoration: none; color: #f4f0f0">Logout <i class="fas fa-sign-out-alt"></i></a></span>';
        }
        ?>
    </div>
</nav>

        <!-- <div class = 'container3'>
            <div class ="img">
                <img src = "../images/poof.jpg" alt="poof is here" class="myimg" tabindex="0">
                <img src = "../images/poof.jpg" alt="poof is here" class="big-img" id="big-1">
            </div>
                <div class ="img">
                <img src = "../images/timmy.jpg" alt="timmy is here" tabindex="0"class="myimg">
                <img src = "../images/timmy.jpg" alt="timmy is here" class="big-img"  id="big-2">
                </div>
            <div class ="img">
                <img src = "../images/cosmo.jpg" alt="cosmo is here" tabindex="0" class="myimg-1">
                <img src = "../images/cosmo.jpg" alt="cosmo is here" class="big-img"  id="big-3">
            </div>
        </div> -->
        <?php
$jsonfile = 'gallery.json';
$jsonimg = file_get_contents($jsonfile);
$images = json_decode($jsonimg, true)['images'];
?>

<div class="container3">
    <?php for ($i = 0; $i < count($images); $i++): ?>
        <div class="img" style="display: inline-block; padding-top: 5%">
            <img src="<?= $images[$i]['url'] ?>" alt="<?= $images[$i]['alt'] ?>" class="myimg"  tabindex="0">
            <img src="<?= $images[$i]['url'] ?>" alt="<?= $images[$i]['alt'] ?>" class="big-img" id="big-<?= $images[$i]['id'] ?>">
        </div>
    <?php endfor; ?>
</div>

        <!-- <div class='container3'>
            <div class="img" id="gallery-container">
                
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="../js/gallery.js"></script> -->
    </body>
</html>