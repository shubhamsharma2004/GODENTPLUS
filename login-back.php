<?php
session_start();

$email = trim($_POST["email"]);
$pass = trim($_POST["password"]);
$passwordd = password_hash($pass, PASSWORD_BCRYPT);

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

if (empty($email)) {
    header("Location: login.php?error=MailAddressrequired");
    exit();
}
if (empty($pass)) {
    header("Location: login.php?error=Passwordisrequired");		
    exit();
}

$sql = "SELECT * FROM user_details WHERE email='$email' and role='patient'";
$result = mysqli_query($conn, $sql);
$email_count = mysqli_num_rows($result);

$sql2 = "SELECT * FROM user_details WHERE email='$email' and role='doctor'";
$result2 = mysqli_query($conn, $sql2);
$email_count2 = mysqli_num_rows($result2);

$sql3 = "SELECT * FROM admin WHERE email='$email' ";
$result3 = mysqli_query($conn, $sql3);
$email_count3 = mysqli_num_rows($result3);

if ($email_count) {
    $email_pass = mysqli_fetch_assoc($result);
    $db_pass = $email_pass['pass'];

    if (password_verify($pass, $db_pass)) {
        $_SESSION['id'] = $email_pass['id'];
        $_SESSION['name'] = $email_pass['name'];
        header("Location: home.php");	
        exit();
    } else {
        header("Location: login.php?error=IncorectMailAddressorpassword");			
        exit();
    }
}else if($email_count2) {
    $email_pass2 = mysqli_fetch_assoc($result2);
    $db_pass2 = $email_pass2['pass'];

    if (password_verify($pass, $db_pass2)) {
        $_SESSION['doctor_id'] = $email_pass2['id'];
        $_SESSION['doctor_name'] = $email_pass2['name'];
        header("Location: home.php");	
        exit();
    } else {
        header("Location: login.php?error=IncorectMailAddressorpassword");			
        exit();
    }
}else if($email_count3){
    $email_pass3 = mysqli_fetch_assoc($result3);
    $db_pass3 = $email_pass3['fpassword'];
    if($pass===$db_pass3){
        $_SESSION['admin_name'] = $email_pass3['fname'];
        header("Location: home.php");	
        exit();
    }
}
 else {
    header("Location: login.php?error=IncorectMailAddressorpassword");			
    exit();
}
?>
