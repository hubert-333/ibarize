<?php
	require("connect.php");
    if (isset($_POST['login']))
    {
        
        $username = $_REQUEST['uname'];
        $pass = $_REQUEST['psw'];
        
        $query = "SELECT * FROM `accounts` WHERE username = '$username' AND password = '$pass'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        $res = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($count == 1)
        {

            header("Location: ./questionaire.php");
        }else{
            $error ="An Error Has Occured.";
            echo "<h2 
            style = 'font-size: 16px;
            background-color: #023563;
            color: #fdfdfd;
            top: 104px;
            padding: 8px 22px;
            width: fit-content;
            position: absolute;
            border-radius: 11px;
            left: 72%;'>
            $error 
            <h2>";
        };
    }
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css" type="text/css">

<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"rel="stylesheet" >
        <title>login</title>
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/940/940631.png" type="image/icon type">
</head>
<body>
    <div class="l-container">
        <div class="l-message">
            <img src="doc1.png" alt="" style="float:left; margin-right:10px;">
                <p style="color:white; font-size: large; font-size: 30px;text-decoration: none;text-align: center; ">
                    <b><i>
                        <u style="text-decoration: none;">WELCOME TO IBARIZE SERVICES.</u>
                    </i></b>  
                </p>
        </div>      
        <div class="l-form">
                        <form action="questionaire.php" method="post" style="margin-left:-50px;">
                                <h1>Login</h1>
                                <label for="username"><b>Username</b></label><br>
                                <input type="text" placeholder="Enter Username" name="uname" required>
                                <label for="psw"><b>Password</b></label><br>
                                <input type="password" placeholder="Enter Password" name="psw" required>
                                <a href="questionaire.html"><button type="submit" value="login" class="l-get-started">Login</button></a>
                                <p>New to IBARIZE?  <a href="sign-up.html">Create An Account</a></p>
                        </form>               
        </div>
</body>
</html>