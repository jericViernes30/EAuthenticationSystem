<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'EAuthenticationSystem';

$con = mysqli_connect($host, $user, $password, $dbname);
// if(!$con){
//     echo 'Database connection not established';
// } else {
//     echo 'Database connected succesfully';
// }