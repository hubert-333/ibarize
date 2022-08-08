<?php
  $server = "localhost";
  $user ="root";
  $pass = "";
  $db = "ibarize"; 
  
  $con = mysqli_connect($server, $user, $pass, $db);
  if(!$con){ 
    echo "connection failed cause: ".mysqli_error($con);
  }
 ?>

