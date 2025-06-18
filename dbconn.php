<?php
session_start();
// Create connection
$conn = mysqli_connect('localhost', 'root','','library');
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>