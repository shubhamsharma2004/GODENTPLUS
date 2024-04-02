<?php
session_start();
$id = $_SESSION["doctor_id"];
$lname = val($_POST["name"]);  
$email = val($_POST["email"]); 
$date = val($_POST["date"]);  
$phone = val($_POST["patientNumber"]);  
$fees = val($_POST["fees"]);  
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
function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}




    $sql = "INSERT INTO booking (lname,email,phonenumber,date,number,fees,doctor_id) VALUES ('$lname','$email','$phone','$date','1','$fees','$id')";
    if ($conn->query($sql) === TRUE) {
        
        header("Location: doctor.php?bookingAdded");}                      
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    
    
$conn->close();
?>