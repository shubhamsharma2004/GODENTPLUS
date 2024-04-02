<?php 


$servername = "localhost";
$username = "root";
$password = "Harshit2053@";
$dbname = "godentplus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET["id"];
$sql = "DELETE FROM user_details WHERE id='$id'";
if(mysqli_query($conn, $sql)){
    header("Location: admin.php?userDeleted");
} 
?>
