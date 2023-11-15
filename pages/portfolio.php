<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<html>

<head>
    <title>
        Jana Al Bardan Portfolio
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   <link rel="stylesheet" type = "text/css" href="../css/portfolio.css">
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
    


    <div class='container' >
        <div class='left-side' style="margin-left: 1%;">
            <br>
            <img id="wanda" src="../images\wanda.jpg" alt="good pic">
            <div class="contact-info" style=" margin-left: 0.5%; font-family: monospace">
                <h4 style="color :#870073; margin-bottom: 3.5%;">CONTACT ME</h4>
                <div class="contact-item">
                    <i class="fas fa-envelope" style="color: #870073; font-size: smaller;"></i>
                    <span style="color:#4f1d47"><a href="jana.albardan@lau.edu" style="color:#4f1d47">Jana Al
                            Bardan</a></span>
                </div>
                <div class="contact-item">
                    <i class="fab fa-linkedin" style="color: #870073"></i>
                    <span style="color:#4f1d47"><a href="www.linkedin.com/in/janaalbardan"
                            style="color:#4f1d47">/janaalbardan</a></span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt" style="color: #870073"></i>
                    <span style="color:#4f1d47">Beirut, Lebanon</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone" style="color: #870073"></i>
                    <span style="color:#4f1d47">+961 03 090 427</span>
                </div>
            </div>
            <div>
                <div class='skills' style="margin-left: 0.5%; font-family: monospace;">


                    <h4 style="color :#870073; margin-bottom: 3.5%;">SKILLS</h4>
                    <div class="button-container">
                        <div class="button">HTML & CSS</div>
                        <div class="button">ReactJS</div>
                        <div class="button">SQL</div>
                        <div class="button">C & C++</div>
                        <div class="button">Python</div>
                        <div class="button">Java</div>

                    </div>




                </div>
            </div>
            <br><br><br><br><br>
        </div>
        <div class='right-side' style="position: relative;">

            <div id="experience" style="position: relative;">

                <h4 style="color: #870073; font-family: monospace; margin-bottom: 0%;">EXPERIENCE</h4>
                <!-- <span style="color: #870073; font-family: monospace; margin-bottom: 0%; padding-bottom: 0%;">June 2023 - August 2023</span> -->
                <hr style="padding-top:0%; margin-top: 0%; color: #870073;">
                <span
                    style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 1%; font-style: italic; font-weight: bold;">
                    Web Development Intern at Beesline
                </span>
                <br>
                <span
                    style="color: #870073; font-family: monospace; margin-bottom: 0%; padding-bottom: 0%;  font-style: italic;">June
                    2023 - August 2023</span>
                <ul style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 0%; ">
                    <li>
                        Developed a user-friendly dashboard enabling users to access the company sales data.
                    </li>
                    <li>
                        Implemented dynamic features like selecting specific countries, date ranges, and different time
                        intervals.
                    </li>
                    <li>
                        Facilitated navigation to various sales-related pages for enhanced data exploration
                    </li>
                </ul>
               
                <span
                    style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 1%; font-style: italic; font-weight: bold;">
                    Back-end Development Intern at Integrated Digital Systems
                </span>
                <br>
                <span
                    style="color: #870073; font-family: monospace; margin-bottom: 0%; padding-bottom: 0%;  font-style: italic;">June
                    2023 - August 2023</span>
                <ul style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 0%; ">
                    <li>
                        Design backend application of a Meeting Room Booking System
                    </li>
                    <li>
                        Build Database using SQL Server 2014
                    </li>
                    <li>
                        Developed WebAPIs using .NET Core and Entity Framework
                    </li>
                </ul>
                <span
                    style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 1%; font-style: italic; font-weight: bold;">
                    Coding Instructor at Geek Express
                </span>
                <br>
                <span
                    style="color: #870073; font-family: monospace; margin-bottom: 0%; padding-bottom: 0%;  font-style: italic;">September
                    2022 - August 2023</span>
                <ul style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 0%; ">
                    <li>
                        Taught programming to middle schoolers using Microsoft MakeCode
                    </li>
                    <li>
                        Improved my communication skills with connecting with students, parents, and trainers
                    </li>

                </ul>
            </div>
            <div id="education">
                <h4 style="color: #870073; font-family: monospace; margin-bottom: 0%;">EDUCATION</h4>

                <hr style="padding-top:0%; margin-top: 0%; color: #870073;">
                <span
                    style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 1%; font-style: italic; font-weight: bold;">
                    Lebanese American University
                </span>
                <br>
                <span
                    style="color: #870073; font-family: monospace; margin-bottom: 0%; padding-bottom: 0%;  font-style: italic;">September
                    2021 - May 2024</span>
                <br>
                <span style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 0%;">
                    Bachelor of Science in Computer Science
                </span>
                <br>
                <span
                    style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 0%; font-style: italic;">
                    CGPA: 3.85/4.0
                </span>
                <br>
                <br>
                <span
                    style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 1%; font-style: italic; font-weight: bold;">
                    English International School
                </span>
                <br>
                <span
                    style="color: #870073; font-family: monospace; margin-bottom: 0%; padding-bottom: 0%;  font-style: italic;">September
                    2020 - June 2021</span>
                <br>
                <span style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 0%;">
                    Lebanese Baccalaureate in Life Sciences
                </span>
                <br>
                <span
                    style="color: #4f1d47; font-family: monospace; padding-top: 0%; margin-top: 0%; font-style: italic;">
                    Ranked Tenth in Lebanon 19/20
                </span>
            </div>

           <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore omnis voluptates ullam numquam exercitationem ad, veniam necessitatibus laudantium porro cum, optio at! Necessitatibus ab recusandae voluptate illum nostrum? Unde, atque! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis facere consectetur suscipit neque fuga optio, vitae dolorem voluptate minima, fugiat amet corrupti nihil unde error nulla! Repudiandae quae quaerat sint?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ab, repellendus nam nisi, minima quibusdam pariatur dolorum voluptate fuga ratione numquam ipsa officiis aspernatur dolor aliquid quis corrupti. Eaque, reprehenderit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum et aspernatur impedit beatae magni officia. Necessitatibus non dolor, veritatis, molestiae dolorum possimus, modi reprehenderit sapiente velit deleniti nam dolorem soluta.</p> -->


        </div>

</body>

</html>