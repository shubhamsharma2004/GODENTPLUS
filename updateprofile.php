<?php
session_start();
$id=$_SESSION['id'];
$servername = "localhost";
    $username = "root";
    $password = "Harshit2053@";
    $dbname = "godentplus";

    $fname = $_POST["FName"];
    $lname = $_POST["LName"];
    $Phone = $_POST["Phone"];
    $email = $_POST["email"];
    $name = $fname." ".$lname;
    $_SESSION["name"]=$name;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    $sql = "UPDATE user_details  SET name='$name',email='$email',phone='$Phone' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {   
        header("Location: profile.php");}

?>