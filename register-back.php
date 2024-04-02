<?php

$name = val($_POST["name"]);  
$email = val($_POST["email"]); 
$pass = val($_POST["password"]); 
$Confirmpass = val($_POST["cpassword"]);  
$role = val($_POST["role"]);  
$phone = val($_POST["phone"]);  
$passwordd = password_hash($pass,PASSWORD_BCRYPT);


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


if(empty($name)){
        header("Location: register.php?error=namerequired");
        exit();}

if(empty($email)){
header("Location: register.php?error=MailAddressrequired");
exit();
}

if(empty($pass)){
header("Location: register.php?error=Passwordrequired");
exit();
}
if(empty($Confirmpass)){
header("Location: register.php?error=pleaseconfirmpassword");
exit();
}
if($pass != $Confirmpass){
	header("Location: register.php?error=notmatching");
exit();
} 

 $sql = "SELECT * FROM user_details WHERE email='$email' or Phone='$phone'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email || $row['Phone']==$phone ){
				
				   header("Location: register.php?error=alreadyexists");
                

                exit();

		}
	
		
		}
else { 
    $sql = "INSERT INTO user_details (name,email,Phone,pass,role) VALUES ('$name','$email','$phone','$passwordd','$role')";
    if ($conn->query($sql) === TRUE) {
        
        header("Location: login.php?accountcreated");}
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    
    }
$conn->close();
?>