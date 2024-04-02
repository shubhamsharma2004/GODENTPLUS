<?php
session_start();
$id=$_POST['booking_id'];
$servername = "localhost";
    $username = "root";
    $password = "Harshit2053@";
    $dbname = "godentplus";

    $fname = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $number = $_POST["number"];
    $phonenumber = $_POST["phonenumber"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    $sql = "UPDATE booking  SET lname='$fname',phonenumber='$phonenumber',email='$email',date='$date',number='$number' WHERE booking_id='$id'";
    if ($conn->query($sql) === TRUE) {   
        header("Location: doctor.php");}
        else{
            header("Location: home.php");
        }

?>