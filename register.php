<?php 
    //including the file that contains connection
    require ('db.php');

    if(isset($_POST['submit'])){
        //in quotes are the name field values from the form fields
        $username=$_POST['username'];
        $mail=$_POST['email'];
        $password=$_POST['password'];

        //insertion query to insert into table 'form_details'
        $query="INSERT INTO form_details VALUES('$username','$mail','$password')";
        mysqli_query($conn, $query);
      }   
?>