<?php
session_start();
$id=$_POST['id'];
$servername = "localhost";
    $username = "root";
    $password = "Harshit2053@";
    $dbname = "godentplus";

    $fname = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $phonenumber = $_POST["phonenumber"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    $sql = "UPDATE user_details  SET name='$fname',Phone='$phonenumber',email='$email' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {   
        header("Location: admin.php");}
        else{
            header("Location: home.php");
        }

?>
