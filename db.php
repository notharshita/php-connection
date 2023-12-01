<?php

  //database connection code
  $conn = mysqli_connect("localhost","root","","database_name");
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }     
?>
