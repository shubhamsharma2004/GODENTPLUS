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
$booking_id = $_GET["booking_id"];
$sql = "DELETE FROM booking WHERE booking_id='$booking_id'";
if(mysqli_query($conn, $sql)){
    header("Location: doctor.php?bookingDeleted");
} 
?>
