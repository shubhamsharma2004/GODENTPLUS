

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" type="x-icon" href="image/letter-g 2.png">
   <title>Update Profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS/login.css">

</head>
<body>
<?php 
session_start();
$id = $_GET['booking_id'];
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

$sql = "SELECT * FROM booking where booking_id='$id'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
?>
   
<div class="form-container">

   <form action="update-back.php" method="post">
      <h3>Update</h3>
      <input type="hidden" name="booking_id" id="booking_id" value="<?php echo "$id" ?>">     
       <input type="text" name="name" id="name" placeholder="enter patient name" required class="box" value=<?php echo $row["lname"]?>>
      <input type="phone" name="phonenumber" id="phonenumber" placeholder="enter patient number" required class="box" value=<?php echo $row["phonenumber"]?>>
      <input type="email" name="email" id="email" placeholder="enter patient email" class="box" value=<?php echo $row["email"]?>>
      <input type="datetime-local" name="date" id="date" placeholder="enter date" required class="box">
      <input type="number" name="number" id="number" placeholder="enter number of visitors" required class="box" value=<?php echo $row["number"]?>>
      <input type="submit" name="submit" value="update now" class="btn">
   </form>

</div>
<?php }}?>
</body>
</html>