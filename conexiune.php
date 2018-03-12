<?php
$databasename="organizare_ev";
$user="stefan";
$password="stefan1";
$server="localhost";
$connection=mysqli_connect($server,$user,$password,$databasename);
if(mysqli_connect_errno()){
	die("Database connection failed");
}

?>