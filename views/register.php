<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20-Sep-19
 * Time: 9:12 AM
 */
include_once '../includes/functions.php';
registerUser();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <title>Team 404/Register</title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-6">
            <div class="sign">
                <h3>HNG Team 404</h3>
            </div>
            <form action="register.php" method="POST">
                <div>
                    <input name="username" class="Username" type="text" id="Username" placeholder="Username" required/><br />
                </div>
                <div>
                    <input name="password" class="Password" type="password" id="password" placeholder="password" required/><br />
                </div>
                <div class="Sign_up">
                    <p>Already have an account? <a href="index.php">Login Here</a></p>
                </div>
                <input name="submit" class="submit-control" type="submit" value="Register">
            </form>
            </div>
            <div class="col-md-7">

            </div>
        </div>
    </body>
</html>