<?php
session_start();
$id=$_SESSION['id'];
$servername = "localhost";
    $username = "root";
    $password = "Harshit2053@";
    $dbname = "godentplus";
    $pass = $_POST["oldp"];
    $newpass = $_POST["newp"];
    $passwordd = password_hash($newpass,PASSWORD_BCRYPT);


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM user_details WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$email_count = mysqli_num_rows($result);
if ($email_count) {
    $email_pass = mysqli_fetch_assoc($result);
    $db_pass = $email_pass['pass'];
if (password_verify($pass, $db_pass)) {   
    $sql = "UPDATE user_details  SET pass='$passwordd' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {   
        header("Location: logout.php");}
    }
else{
    header("Location: profile.php?wrongpassword");
}
}
?>