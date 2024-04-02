<?php
session_start();
$id = $_SESSION["id"];
$lname = val($_POST["lname"]);  
$phonenumber = val($_POST["phonenumber"]); 
$email = val($_POST["email"]); 
$date = val($_POST["date"]);  
$number = val($_POST["number"]);  
$doctor = val($_POST["doctor"]);  

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




    $sql = "INSERT INTO booking (lname,phonenumber,email,date,number,userID,doctor_id) VALUES ('$lname','$phonenumber','$email','$date','$number','$id','$doctor')";
    if ($conn->query($sql) === TRUE) {$id = $_SESSION["id"]; 
        
        header("Location: user.php?bookingAdded");}                      
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    
    
$conn->close();
?>