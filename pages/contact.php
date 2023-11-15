<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>
    <head>
        <title>Contact Me
        </title>
        <link rel = "stylesheet" type = "text/css" href="../css/portfolio.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        
    </head>
    <body>
     
        
    <nav class="navbar">
            <div class="left-content" style="margin-left:1%">
            <div class="dropdown-menu" style="padding-left: 1%;">
                    <span class="material-symbols-outlined" style="color: #f4f0f0;">menu</span>
                    <span class="menu-text" style="color: #f4f0f0;">MENU</span>
                    <div class="dropdown-content menu-rtl">
                        <ul>
                            <li class = "menu-item"><a href="portfolio.php">Resume</a></li>
                            <li class = "menu-item"><a href="contact.php">Contact Me</a></li>
                            <li class = "menu-item"><a href="gallery.php">Gallery</a></li>
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
        

        <div class = "container2">
            <div class="contactinfo">
               
                <div class="contactitem">
                    <i class="fas fa-envelope fa-10x"  style="color: #870073;"></i>
                    <span><a href="mailto:jana.albardan@lau.edu">jana.albardan@lau.edu</a></span>
                    <!-- <br> -->
                    <span><a href="mailto:janaalbardan04@gmail.com">janaalbardan04@gmail.com</a></span>
                    <p>Feel free to send me an email.</p>
                </div>
                <div class="contactitem">
                    <i class="fas fa-phone fa-10x"  style="color: #870073;"></i>
                    <span style="font-size: 18px; margin-top: 2%;">+961 03 090 427</span>
                    <p style="font-size: 18px;">You can reach me by phone.</p>
                </div>
                <div class="contactitem">
                    
                        <i class="fab fa-github fa-10x" style="color: #870073;"></i>
                        <span><a href="https://github.com/janabardan" target="_blank">GitHub</a></span>
                        <p>Explore my coding projects on GitHub.</p>
                </div>
                <div class="contactitem">
                   
                        <i class="fab fa-linkedin fa-10x"  style="color: #870073;"></i>
                        <span> <a href="https://www.linkedin.com/in/janaalbardan" target="_blank">LinkedIn</a></span>
                        <p>Let's connect on LinkedIn.</p>
                    </a>
                </div>
            </div>
            
        </div>
    </body>
</html>