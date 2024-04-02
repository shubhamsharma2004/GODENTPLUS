<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" href="./CSS/admin.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://kit.fontawesome.com/00ab3c0205.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php session_start();
    if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];

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
    $sql = "SELECT * FROM booking where userID='$id'";
        $result = $conn->query($sql);
    ?>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>Go<span>dentplus</span></h3>
        </div>
        

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="fas fa-th-large"></span>
                            <small>User Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="#Appointments">
                            <span class="las fa-stethoscope"></span>
                            <small>My Appointments</small>
                        </a>
                    </li>
                    <li>
                       <a href="profile.php">
                            <span class="fas fa-user"></span>
                            <small>My Profile</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="fas fa-question"></span>
                            <small>Help</small>
                        </a>
                    </li>
                    <li>
                      
                            <span class="fas fa-sign-out-alt"></span>
                            <a href="logout.php">
                            <small>Logout</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>
                    
                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(image/1.jpeg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>User Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
            


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>My Appointments</span>
                        </div>
                    </div>

                    <div id="Appointments">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th><span class="las la-sort"></span> CLIENT</th>
                                    <th><span class="las la-sort"></span> NUMBER</th>
                                    <th><span class="las la-sort"></span> DATE & TIME</th>
                                    <th><span class="las la-sort"></span> AMOUNT</th>
                                    <th><span class="las la-sort"></span> ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {    
	?>	
                                <tr>
                                    <td><?php echo $row['booking_id']?></td>
                                    <td>
                                        <div class="client">
                                
                                            <div class="client-info">
                                                <h4><?php echo $row['lname']?></h4>
                                                <small><?php echo $row['email']?></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <?php echo $row['phonenumber']?>
                                    </td>
                                    <td>
                                    <?php echo $row['date']?>
                                    </td>
                                    <td>
                                        -$205
                                    </td>
                                    <td>
                                        <div class="actions">
                                        <a href="deletebookinguser.php?booking_id=<?php echo $row['booking_id']?>"> <span class="fa-solid fa-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php	
		} 
	?>
                                      
                                
                            </tbody>
                        </table>
                        <?php	
	} else {
			echo "0 results";
	}

	
$conn->close();
?>
                 
                    </div>
              </div>

            </div>
            
        </main>
        
    </div>

    <script>
        function showmodel(){
            document.querySelector('.overlay').classList.add('showoverlay');
            document.querySelector('.addpatient').classList.add('showaddpatient');
        }
        function closemodel(){
            document.querySelector('.overlay').classList.remove('showoverlay');
            document.querySelector('.addpatient').classList.remove('showaddpatient');
        }
    </script>
    <?php }
    else {
        header("Location: login.php");
    } ?>
</body>
</html>