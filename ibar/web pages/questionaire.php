<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" >
    <title>questions</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/940/940631.png" type="image/icon type">
    <header>
                <div class="container" style="background-color: blue">
            <nav>
                <div class = "nav-container">
                    <div><a class="logo" href="questionaire.html"><img src="Capture-removebg-preview.png" alt="" height="50px" width="50px"></a></div>
                    <div>IBARIZE SERVICES</div>
                    <div class="active"><a   href="#questionaire.html">Home</a></div>
                    <div><a  class="button:hover" href="news.html">News</a></div>
                    <div><a  href="contact.html">Contact</a></div>
                    <div><a  href="about.html">About</a></div>
                    <div><input type="text" class = "search" placeholder="Search.."></div>
                    <div class="dropdown"><a href="#about.html"class="dropbtn"><img src="user.png" class="logo" width="50px">Profile</a>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="index.html" >Sign-out</a>
                        </div>
                        </div>
                </div>
            </nav>                       
    </div>   
    </header>
</head>
<body>
    <div class="l-form nform">
        <td style="padding: 0px; margin-right:0px; margin-left:0px;"> 
            <form action="connect.php" method="post" style="margin:0px ; margin-left:0px">
                <div>
                    <h1>Ask what worries you</h1>
                    <label for="username"><b>Your name</b></label>
                    <input type="text" width = "100px" placeholder="Enter Username" name="username" required>
                    <label for="username"><b>Your question</b></label>
                    <input type="textarea" width = "100px" height = "200px" placeholder="Your question" name="username" required>
                    <a href="index.html" class="l-get-started btn">Submit</a> 
                </div>
            </form> 
        </td>  
    </div>
    </div>
    <div class="footer">
        <a href="#">Copyright</a>
    </div>
</body>
</html>