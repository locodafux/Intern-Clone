<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'intern-clone';

$connection = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error()) {
    echo"Cant connect to the database";
} else {
}
 ?>