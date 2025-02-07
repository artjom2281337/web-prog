<?php
$servername="db";
$username="artjom";
$password="password";
$dbname ="artjom";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);

?>
