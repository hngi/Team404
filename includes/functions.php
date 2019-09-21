<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20-Sep-19
 * Time: 9:32 AM
 */
include_once '../model/dbConnection.php';
function registerUser()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password =  $_POST['password'];

        // sanitization of input
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

////         password encryption
//        $hashFormat = "$2y$10$";
//        $salt = "myamiableteamisonthistaskforhng";
//        $hashF_and_salt = $hashFormat . $salt;
//        $password = crypt($password, $hashF_and_salt);

        $query = "INSERT INTO users (username, password) ";
        $query .= "VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query Failed' . mysqli_error());
        } else {
            echo "Registration successful";
            header('location: index.php');
        }
    }
}


function loginUser(){

    if (isset($_POST['login'])) {
        global $connection;
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password =  $_POST['password'];

        // sanitization of input
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);


        $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        $row_count = mysqli_num_rows($result);
        if($row_count > 0) {
            $_SESSION['username'] = $row['username'];

//            $password = crypt($password, $db_password);
//
            header("location: welcome.php");
        } else {
            echo "Invalid username or password";
        }

//        $sql_query = "select count(*) as cntUser from users where username='".$username."' and password='".$password."'";
//        $result = mysqli_query($connection,$sql_query);
//        $row = mysqli_fetch_array($result);
//
//        $count = $row['cntUser'];
//
//        if($count > 0){
//            $_SESSION['username'] = $username;
//            header('Location: welcome.php');
//        }else{
//            echo "Invalid username and password";
//        }
    }
}


