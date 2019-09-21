<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20-Sep-19
 * Time: 5:35 AM
 */

$host = 'localhost';
$dbName = 'team404';
$username = 'root';
$password = '';


$connection = mysqli_connect($host, $username, $password, $dbName);
if(!$connection){
    die('Database connection failed');
}