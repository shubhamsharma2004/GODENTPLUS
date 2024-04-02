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
    if(isset($_SESSION['admin_name'])){

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
    $sql = "SELECT * FROM booking";
        $result = $conn->query($sql);
    $sql2 = "SELECT * FROM user_details WHERE role='doctor'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM user_details WHERE role='doctor'";
$result3 = $conn->query($sql3);
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
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="#Appointments">
                            <span class="las fa-stethoscope"></span>
                            <small>Appointments</small>
                        </a>
                    </li>
                    <li>
                       <a href="#doctors">
                            <span class="fas fa-user-md"></span>
                            <small>Doctor</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="fas fa-question"></span>
                            <small>Help</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="fas fa-sign-out-alt"></span>
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
                        
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>100+</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>Doctors</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>8</h2>
                            <span class="fas fa-bed"></span>
                        </div>
                        <div class="card-progress">
                            <small>Clinic</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card"> <br>
                        <div class="card-head">
                            <h2>$653,200</h2>
                            <span class=""></span>
                        </div> 
                        <div class="card-progress">
                            <small>Earnings</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47,500</h2>
                            <span class="fas fa-briefcase-medical"></span>
                        </div>
                        <div class="card-progress">
                            <small>New Appointments</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Appointments</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                            <button id="open" onclick="showmodel()">Add Patient</button>
                            <div class="overlay"></div>
                            <div class="addpatient">
                                <span onclick="closemodel()">&times;</span>
                                <form action="addpatient-admin.php" method="post">
                                <div>
                                    
                                    <input type="text" name="name" id="name" placeholder="Enter patient name" required>
                                </div>
                                <div>
                                   
                                    <input type="number" name="patientNumber" id="patientNumber" placeholder="Enter patient number" required>
                                </div>
                                <div>
                                   
                                    <input type="email" name="email" id="email" placeholder="Enter patient email">
                                </div>
                                <div>
                                    
                                    <input type="datetime-local" name="date" id="date" placeholder="Enter your date and time" required>
                                </div>
                                <div>
                                    
                                    <input type="text" name="fees" id="fees" placeholder="Amount paid" required>
                                </div>
                                <div>
                                <select name="doctor" class="box">
            <?php
                            if ($result2->num_rows > 0) {
		// output data of each row
		while($row2 = $result2->fetch_assoc()) {    
	?>	
         <option value="<?php echo $row2['id']?>"><?php echo $row2['name']?></option> <?php	
		}}
        else{
            echo "0 results";
        } ?>
        </select>
                                </div>
                                <button type="submit">Add</button>
                                </form>
                            </div>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
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
                                    <td><?php echo $row["booking_id"];?></td>
                                    <td>
                                        <div class="client">
                                
                                            <div class="client-info">
                                                <h4><?php echo $row["lname"];?></h4>
                                                <small><?php echo $row["email"];?></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <?php echo $row["phonenumber"];?>
                                    </td>
                                    <td>
                                    <?php echo $row["date"];?>
                                    </td>
                                    <td>
                                    <?php echo $row["fees"];?>
                                    </td>
                                    <td>
                                        <div class="actions">
                                           <a href="update-admin-patient.php?booking_id=<?php echo $row["booking_id"];?>"><span class="las la-eye"></span></a> 
                                           <a href="deletebooking-admin.php?booking_id=<?php echo $row['booking_id']?>"> <span class="fa-solid fa-trash"></span></a>
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
    ?>
                    </div>
              </div>

            <div class="records table-responsive">

                <div class="record-header">
                    <div class="add">
                        <span>Doctors</span>
                        <select name="" id="">
                            <option value="">ID</option>
                        </select>
                    </div>

                    <div class="browse">
                       <input type="search" placeholder="Search" class="record-search">
                        <select name="" id="">
                            <option value="">Status</option>
                        </select>
                    </div>
                </div>

                <div id="doctors">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>DID</th>
                                <th><span class="las la-sort"></span> DOCTOR</th>
                                <th><span class="las la-sort"></span> NUMBER</th>
                                <th><span class="las la-sort"></span> Email </th>
                                <th><span class="las la-sort"></span> ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                        if ($result3->num_rows > 0) {
		// output data of each row
		while($row3 = $result3->fetch_assoc()) {    
	?>	
                            <tr>
                                <td><?php echo $row3["id"];?></td>
                                <td>
                                    <div class="client">
                            
                                        <div class="client-info">
                                            <h4><?php echo $row3["name"];?></h4>
                                        
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <?php echo $row3["Phone"];?>
                                </td>
                                <td>
                                <?php echo $row3["email"];?>
                                </td>
                            <td>
                                <div class="actions">
                                           <a href="update-admin-doctor.php?id=<?php echo $row3["id"];?>"><span class="las la-eye"></span></a> 
                                           <a href="deletedoctor-admin.php?id=<?php echo $row3['id']?>"> <span class="fa-solid fa-trash"></span></a>
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