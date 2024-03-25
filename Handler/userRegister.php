<?php 
if(isset($_POST['register'])) {
    require("./database.php");

$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);

$queryRegister = "INSERT INTO accounts VALUES(null,'$firstname','$lastname','$username','$password')";
$sqlRegister = mysqli_query($connection, $queryRegister);
echo'<script> alert("successfully registered an account")</script>';
echo '<script>window.location.href = "../index.php" </script>';

} 
?>