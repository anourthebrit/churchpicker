<?php
// database connection code
$servername = "localhost";
$username = "id20501286_anour";
$password = "!Notravezzy67?";
$database = "id20501286_churchpicker";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>