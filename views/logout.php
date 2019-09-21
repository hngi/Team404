<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20-Sep-19
 * Time: 6:25 AM
 */

// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: login.php");
exit;