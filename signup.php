<?php 
    require ('db.php');

    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $mail=$_POST['uemail'];
        $password=$_POST['upassword'];


        $query="INSERT INTO form_details VALUES('$username','$mail','$password')";
        mysqli_query($conn, $query);
      }

   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login-Register</title>
        <link rel="icon" href="favicon-32x32.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulishy&display=swap" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="form-wrapper">
            <div class="form-side">
                <form class="my-form" action="index.php" method="post">
                    <div class="form-welcome-row">
                        <h1>Create your account</h1>
                    </div>
                    
                    <div class="text-field">
                    <label for="name">Name:
                        <input
                            id="username"
                            type="text"
                            name="username"
                            placeholder="Your Name"
                            required
                        >
                    </label>
                </div>

                    <div class="text-field">
                        <label for="email">Email:
                            <input
                                type="email"
                                id="email"
                                name="uemail"
                                autocomplete="off"
                                placeholder="Your Email"
                                required
                            >
                        </label>

                    </div>
                    <div class="text-field">
                        <label for="password">Password:
                            <input
                                id="password"
                                type="password"
                                name="upassword"
                                placeholder="Your Password"
                                title="Minimum 6 characters at 
                                    least 1 Alphabet and 1 Number"
                                pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$"
                                required
                            >
                        </label>
                    </div>
                    <button type="submit" class="my-form__button" name="submit">
                        Register
                    </button>
                    
                </form>
            </div>

        </div>
       
    </body>
</html>