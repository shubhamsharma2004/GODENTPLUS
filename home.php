<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godentplus </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
<?php
session_start();
$name = $_SESSION['name'];
// $id = $_SESSION['id'];

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
$sql = "SELECT * FROM user_details WHERE role='doctor'";
$result = $conn->query($sql);


?>
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class=""></i>
    <h3>GoDentPlus</h3> </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#book">book</a>
        <a href="#contact">contact</a>
        <?php if(isset($_SESSION['id'])){?>
       <a href="user.php" ><?php  echo "Hi , $name"?></a><?php }
       else if(isset($_SESSION['doctor_id'])){?>  <a href="doctor.php" ><?php  echo "Hi ,Doctor";?></a>
       <?php } else if(isset($_SESSION['admin_name'])){?>  <a href="admin.php" ><?php  echo "Hi ,admin";?></a>
       <?php } 
       else{?><a href="login.php"><?php echo "login/signup"?> </a><?php
       }?></a>
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/undraw_medicine_b-1-ol.svg" alt="">
    </div>

    <div class="content">
        <h3>Welcome to GoDentPlus</h3>
        <p>We are here to make you smile<br> A better life starts with beautiful smile</p>
        <a href="#book" class="btn"> Book Your Appointment Now<span class="fas fa-chevron-right"></span> </a>
    </div>
    

</section>

<!-- home section ends -->


<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>quick checkup</h3>
            <p>A quick teeth check-up.Examine your gums, soft palette, throat and neck, checking for any abnormalities.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>The doctors are well qualified from top dental colleges of india, they are also expertist.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p> Oral hygiene, the practice of keeping the mouth and teeth clean in order to prevent dental disorders.</p>
            
        </div>
        <div class="box">
            <i class="fas fa-teeth whitening"></i>
            <h3>teeth whitening</h3>
            <p>Teeth Whitening help you to boost your self confidence and enhances your appearance.</p>
            
        </div>
        <div class="box">
            <i class="fas fa-tooth"></i>
            <h3>root canal</h3>
            <p>Root canal treatment is a dental procedure that relieves pain caused by an infected or abscessed tooth.</p>
            
        </div>
        <div class="box">
            <i class="fas fa-teeth-open"></i>
            <h3>teeth cleaning</h3>
            <p>It brightens your smile,Tooth loss is prevented,Cavities are prevented and Your overall health is boosted.</p>
            
        </div>
        <div class="box">
            <i class="fas fa-teeth-open"></i>
            <h3>teeth cleaning</h3>
            <p>It brightens your smile,Tooth loss is prevented,Cavities are prevented and Your overall health is boosted.</p>
            
        </div>
        <div class="box">
            <i class="fas fa-teeth-open"></i>
            <h3>teeth cleaning</h3>
            <p>It brightens your smile,Tooth loss is prevented,Cavities are prevented and Your overall health is boosted.</p>
            
        </div>
        

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/undraw_selecting_team_re_ndkb.svg" alt="">
        </div>

        <div class="content">
            <h3>we provide you the best in goalpara</h3>
            <p>Hi! everyone i am Dr Jiyad i have completed my BDS degree from Delhi, NCR. I have started my clinic in the year 2021 and till now i have treated lots of patients out which i found 100% happy patients. I always being friendly with patients and i will always.</p>
            <p>Our mission is to make you happy and make you always smile. <br> Our future plans are we will open our clinic in the different district and different cities of Assam and also make a family of different doctors.</p>
        </div>

    </div>

</section>

<!-- about section ends -->
<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>2</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-user"></i>
        <h3 >1000+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-teeth"></i>
        <h3>50+</h3>
        <p>treatment available</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>10+</h3>
        <p>available clinic</p>
    </div>

</section>

<!-- icons section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="Doctor PIC 1">
            <h3>Dr. Y</h3> <br>
            <span>BDS, Delhi NCR<br> Dental Surgeon, Dental Expert <br> Availablity (Monday - sunday)</span> <br> <br>
            <div class="share">
                <a href="" class="fab fa-facebook-f"></a>
                <a href="" class="fab fa-twitter"></a>
                <a href="" class="fab fa-instagram"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/pic-2.png" alt="Doctor PIC 2">
            <h3>Dr. X</h3> <br>
            <span>BDS, MDS, Delhi, NCR <br>Orthodontic Specialist <br>Life member Indian Orthodontic Society <br> Availablity(Every First Saturday of Month) </span> <br>
            <div class="share">
                <a href="#doctors" class="fab fa-facebook-f"></a>
                <a href="#doctors" class="fab fa-twitter"></a>
                <a href="#doctors" class="fab fa-instagram"></a>
            </div>
        </div>


    </div>

</section>

<!-- doctors section ends -->


<!----our timing-->
<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>timing</span> </h1>

    <div class="box-container">

        <div class="box">
            
            <h3>Monday - Sunday</h3> <br>
            <span><h4></h4>10:00 AM to 4:00 PM</h4></span> <br> <br>
            <a href="#contact" class="btn"> Contact Us </a>
        </div>


    </div>

</section>

<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>book appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/undraw_booking_re_gw4j.svg" alt="">
        </div>

        <form action="booking.php" method="post" >
            <h3>book appointment</h3>
            <?php if(isset($_SESSION['id'])){?>
            <input type="text" placeholder="your name" class="box" id="lname" name="lname" required>
            <input type="tel" placeholder="your number" class="box" id="phonenumber" name="phonenumber" required>
            <input type="email" placeholder="your email(optional)" class="box" id="email" name="email">
            <input type="datetime-local" class="box" id="date" name="date" required>
            <input type="number" placeholder="number of patients(required)" class="box" id="number" name="number" required>
            <select name="doctor" class="box">
            <?php
                            if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {    
	?>	
         <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option> <?php	
		}}
        else{
            echo "0 results";
        } 
	?>
      </select>
     
           <a href="#"> <input type="submit"  value="book now" class="btn"  >  <br> <br></a><?php }
           else{
           ?> <h1>You need to login for booking an appointment</h1><?php
           }?>
            <div class="message">
                <div class="success" id="success">Your Appointment is Booked succesfully!</div>
            </div>
        </form>
        

    </div>
    

</section>

<!-- booking section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> what our <span>patients says</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>Mr B</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">during my school days i was having small gap in my front teeth because of which i feel low confident to speak in public but after my treatment i am a good public speaker at my college and now i do not feel low cofindence to speak. thank you doctor Shaheb</p>
        </div>

        <div class="box">
            <img src="image/pic-2.png" alt="">
            <h3>Mr. Y</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">when i was studying my b.Pharm degree i was embrassed to go out and talk with new people because of my teeth then i mate doctor. within few days i got a beautiful smile in my face now i am happy and i confidently intract with people. thank you doctor for beautiful smile.</p>
        </div>

        <div class="box">
            <img src="image/user.png" alt="">
            <h3>Mr. X</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">I went for Dental scaling/cleaning  treatment at Dr. Jiyad. I found his work to be very good and precise. I was satisfied with his work and also, his charges are also reasonable and apt as well. He is a soft spoken,  and well-mannered  doctor with Good professional ethics. I wish him all the best ahead.</p>
        </div>

    </div>

</section>

<!-- review section ends -->


<!----our developer-->
<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>developer</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/ani.jpg" alt="Developer Image">
            <h3>Anisul Islam</h3> <br>
            <span>FrontEnd Developer <br> cSE student, CU, Punjab</span>
            <div class="share">
                <a href="https://github.com/imanisul" target="_blank" class="fab fa-github"></a>
                <a href="https://anisulprofile.netlify.app/" target="_blank" class="fas fa-globe-americas"></a>
                <a href="https://www.instagram.com/ani_sul17/" target="_blank" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/imanisul/" target="_blank" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>Saransh Sharma</h3> <br>
            <span>BackEnd Developer <br> cSE student, CU, Punjab</span>
            <div class="share">
                <a href="" target="_blank" class="fab fa-github"></a>
                <a href="" target="_blank" class="fas fa-globe-americas"></a>
                <a href="" target="_blank" class="fab fa-instagram"></a>
                <a href="" target="_blank" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/vivekdev (4).png" alt="">
            <h3>Vivek Kumar</h3> <br>
            <span>BackEnd Developer <br> cSE student, CU, Punjab</span>
            <div class="share">
                <a href="" target="_blank" class="fab fa-github"></a>
                <a href="" target="_blank" class="fas fa-globe-americas"></a>
                <a href="" target="_blank" class="fab fa-instagram"></a>
                <a href="" target="_blank" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/sahildev.png" alt="">
            <h3>Sahil Sharma</h3> <br>
            <span>BackEnd Developer <br> cSE student, CU, Punjab</span>
            <div class="share">
                <a href="" target="_blank" class="fab fa-github"></a>
                <a href="" target="_blank" class="fas fa-globe-americas"></a>
                <a href="" target="_blank" class="fab fa-instagram"></a>
                <a href="" target="_blank" class="fab fa-linkedin"></a>
            </div>
        </div>


    </div>

</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> teeth whitening  </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> teeth cleaning </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> oral checkup </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> oral x-ray </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> root canal </a>
        </div>

        <div class="box" id="contact">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91-1234567 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91-12345678 </a>
            <a href="mailto:ianisul768@gmail.com"> <i class="fas fa-envelope"></i> website@gmail.com </a>
            <a href=""> <i class="fas fa-map-marker-alt"></i> reach us  </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href=""> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href=""> <i class="fab fa-twitter"></i> twitter </a>
            <a href=""> <i class="fab fa-instagram"></i> instagram </a>
        </div>

    </div>

    <div class="rights">
        <h3>Copyright &#169 Godentplus | All Right Reserved  </h3>
    </div>

</section>



<!-- footer section ends -->

<!-- custom js file link  -->
<script src="script.js"></script>
<script src="message.js"></script>first_name

</body>
</html>
