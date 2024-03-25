<?php 
require("./database.php");

if(isset($_POST['save'])) {

$date = $_POST['date'];
$timeStart = $_POST['time-start'];
$timeEnd = $_POST['time-end'];
$duration = $_POST['duration'];
echo $date;
echo $timeStart;
echo $timeEnd;
echo $duration;

$queryRegister = "INSERT INTO timesheet VALUES(null,'$date','$timeStart','$timeEnd','$duration')";
$sqlRegister = mysqli_query($connection, $queryRegister);
// echo'<script> alert("successfully saved the time")</script>';
echo '<script>window.location.href = "../home.php" </script>';

} 
?>