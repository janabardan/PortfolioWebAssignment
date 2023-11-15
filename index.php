<?php 
session_start();
session_unset();
session_destroy();
?>

<html>

<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   <link rel="stylesheet" type = "text/css" href="./css/portfolio.css">
   <style>
            .title{
                padding-top: 7%;
            }
            h1{
                font-weight: bold;
                color: #4f1d47;
            }
            .txtfield{
                color: #870073;
                border-radius: 7%;
                border: 2px solid #f4f0f0;
            }
            label{
                color:#4f1d47;
                font-weight: bold;
            }
            .mButton{
                background-color:#870073 ;
                color: #f4f0f0;
                padding: 14px 20px;
                border: none;
                cursor: pointer;
                
                text-align: center;
                }
              
             </style>
</head>

<body>
    
    
    <nav class="navbar">
        <div class="left-content">
            <span class="name">Jana Al Bardan</span>
            <span class="occupation">Computer Science Student</span>
        </div>

    </nav>
    <div class="title">
            <h1 style="text-align: center;">Welcome to my Portfolio!</h1>
            <h1 style="text-align: center;">Kindly Log In</h1>
        </div>
      
        <div class="paragraph" style="text-align:center">
            <form action="be/login.php" method="POST" id="login-form">
                <label for="un">Username</label>
                <br>
                <input type="text" name="username" id="un" class="txtfield" onkeypress="checkEnter(event, 'pass')">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="password" id="pass" class="txtfield" onkeypress="checkEnter(event, 'login-form')">
                <br>
                <br>
                <input type="button" value="Login" onclick="login()" class="mButton">
                <input type="button" value="Cancel" onclick="ClearForm()" class="mButton">
            </form>
           
            <h1 style="text-align: center;">Don't have an account?</h1>
            <!-- <h1 style="text-align: center;">Sign Up here!</h1> -->
          
            <a style="text-align: center;font-weight: bold" href="pages/signup.html">Sign Up here!</a>
        </div>
    
<script>
    function login(){
        var un=document.getElementById("un").value;
        var pass=document.getElementById("pass").value;
        if ((un=="")||(pass=="")){
            alert("You must fill in the username and the password!");
        }else{
            document.getElementById("login-form").submit();
        }

    }
    function ClearForm(){
        document.getElementById("un").value="";
        document.getElementById("pass").value="";
    }
    function checkEnter(event, nextField) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById(nextField).focus();

            if (nextField === 'login-form') {
                login();
            }
        }
    }
</script>

</body>

</html>