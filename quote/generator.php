<?php
$servername = "shareddb1e.hosting.stackcp.net";
$username = "Radoq";
$password = "feniks92";
$database = "generator-3233f25a";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>