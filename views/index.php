<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

include_once '../includes/functions.php';
loginUser();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <title>Team 404/Welcome</title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-6">
            <div class="sign">
                <h3>HNG Team 404</h3>

            </div>
            <form action="index.php" method="POST">
                <div>
                    <input name="username" class="Username" type="text" id="Username" placeholder="Username" required/><br />
                </div>
                <div>
                    <input name="password" class="Password" type="password" id="password" placeholder="password" required/><br />
                </div>
                <div class="Sign_up">
                    <p>Don't have an account? <a href="register.php">Register Here</a></p>
                </div>
                <input name="login" class="submit-control" type="submit" value="Sign in">
            </form>
            </div>
            <div class="col-md-7">
                
            </div>
        </div>
    </body>
</html>