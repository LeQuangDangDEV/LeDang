<?php
$servername = "localhost";
$username = "root";
$pass_word = "";
$database = "kakak";

// Create connection
$conn = new mysqli($servername, $username, $pass_word, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "ok!";
?>