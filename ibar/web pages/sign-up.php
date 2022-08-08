<?php
	require("connect.php");
    if (isset($_POST['signup']))
    {
        $username = $_REQUEST['uname'];
        $pwd = $_REQUEST['psw'];

        
        $query = "INSERT INTO accounts (username,password) 
        VALUES ('$username','$pwd')";

        

        if(mysqli_query($con, $query)){
            echo $query;
            #header("Location: ./questionaire.html");
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"rel="stylesheet" >
    <title>IBARIZE</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/940/940631.png" type="image/icon type">
</head>
<body>
    <div class="l-container s-container">
                    <div class="l-message s-message">   
                            <p style="color:white; font-size: large; font-size: 30px;text-decoration: none;text-align: center; ">
                                <b>
                                <i>
                                    <u style="text-decoration: none;text-align:center">WELCOME TO IBARIZE SERVICES.</u>
                                </i>
                                </b>  
                            </p>
                            <img src="doc2.png" alt="" style="float:left; margin-right:10px;">
                    </div>      
                    <div class="l-form s-form">
                        <td style="padding: 0px; margin-right:0px; margin-left:0px;"> 
                            <form action="" method="post" style="margin:0px ; margin-left:0px">
                                <div>
                                    <h1>Sign Up</h1>
                                    <p>Please fill in this form to create an account.</p>
                                    <label for="username" ><b>Username</b></label>
                                    <input type="text" placeholder="Enter Username" name="uname" required>
                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>
                                    <p>By creating an account you agree to our <a href="terms&conditions.html" style="color:dodgerblue">Terms & Privacy</a>.</p>
                                        
                                    <a href="index.html" class="l-get-started btn">Cancel</a>
                                    <a href="questionaire.html" class="l-get-started btn" name="signup">Create</a>
                                        
                                </div>
                            </form> 
                        </td>  
                    </div>
                </tr>
            </table>
        </p>         
    </div>
</body>

</html>