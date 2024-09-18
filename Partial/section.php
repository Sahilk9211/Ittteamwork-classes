
<div>
<?php
// Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $topic = $_POST['topic'];
    $subject = $_POST['subject'];
    


//connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "itteam";

//Create a connection 
$conn = mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successful
if (!$conn) {
  die("Sorry we failed to connect: ". mysqli_connect_error() );
}

else{
  echo "";
}


//submit to database
      //sql query to be executed
//$sql = "INSERT INTO `phptrip` (`name`, `email`) VALUES ('$name', '$email');";
      $sql = "INSERT INTO `itteamwork` (`name`, `email`, `phone`, `topic`,`subject`, `date`) VALUES ('$name', '$email', '$phone', '$topic','$subject', current_timestamp())";
      

      $result=mysqli_query($conn, $sql);
      if ($result) {
        // header ("index.php");
        
        echo'<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Your message was submitted successfully!</strong><br/> I’ll call you back with more information soon.
</div>';
      }
      else {
          echo"The record was not inserted successfully!".mysqli_error($conn);
}
}
?>




<!-- Middele page -->

    <div class="middle">
        <div class="mid-left">
            <h1>Access Your
                <span style="color: #2694c7; font-size: 3 rem;"> Career</span> Growth With Us
            </h1>
            <p class="animated-text">Learn
                <span class="auto-type"></span>
            </p>
            <p class="para">Confused on which course to take? Browse courses and find out the best course for you. Our
                attempt to teach basics and those coding techniques to people in short time which took me ages to learn.
            </p>
            <div>
                <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn btn2 button">Inquiry
                        Now</button></a>
                <a href="http://itteamwork.infinityfreeapp.com/course.php"><button class="btn btn2 button">Explore
                        Now</button></a>
            </div>
        </div>
        <!-- style="background-image:url('./Assets/background2.png');" -->
        <div class="mid-right">
            <!-- <img src="./Assets/help.png" alt="" srcset=""> -->
            <img src="./Assets/laptop.png" alt="" srcset="">
            <!-- <h1>Hello</h1> -->
        </div>

    </div>
    <!-- Middle page end -->

    <h1 class="serv">Courses</h1>

    <!-- Starting card page -->
    <div class="card-container">

        <div class="card">
            <img src="./Assets/carreer1.png" alt="" width="" srcset="">
            <div class="card-content">
                <h3>Career Course</h3>
                <p>Learn Career or improve your skills online today. Choose from a wide range of Career courses
                    offered from top universities and industry leaders</p>
                <a href="#"><button class="btn3">Read More</button></a>
            </div>
        </div>

        <!-- 2 -->
        <div class="card">
            <img src="./Assets/certicicate.png" alt="" width="" srcset="">
            <div class="card-content">
                <h3>Certifiacte Course</h3>
                <p>Learn Career or improve your skills online today. Choose from a wide range of Career courses
                    offered from top universities and industry leaders</p>
                <a href="#"><button class="btn3">Read More</button></a>
            </div>

        </div>
        <!-- 3 -->
        <div class="card">
            <img src="./Assets/time.png" alt="" width="" srcset="">
            <div class="card-content">
                <h3>Short time Course</h3>
                <p>Learn Career or improve your skills online today. Choose from a wide range of Career courses
                    offered from top universities and industry leaders </p>
                <a href="#"><button class=" btn3">Read More</button></a>
            </div>

        </div>
    </div>


    <h1 class="serv">Our Training Experts</h1>
    <!-- Section page Start  -->
    <div class="section">

        <div class="first">
            <div class="upper">

                <img src="./Assets/sir1.png" alt="" srcset="">
                <div class="text1">
                    <h2 style="margin-bottom: 0.5rem;">C G Prasad</h2>
                    <Span>Sr. A+ and N+ Certified + CCNA &amp; MCITP /MCSA Trainer</Span>
                    <span>With over two decades of experience in the world of Information Technology, I've journeyed
                        through the ever-evolving tech landscape. I began my career delving into the intricacies of
                        Unix systems, including SCO and Sun Solaris. As my passion for technology.</span><br>
                    <a href="#"><button class="btn4">Read More</button></a>
                </div>


            </div>

            <div class="upper">
                <img src="./Assets/sir2.png" alt="" srcset="">
                <div class="text1">
                    <h2 style="margin-bottom: 0.5rem;">Abdul Aziz Khan</h2>
                    <Span>IT systems, OSS, Cloud Consultant &amp; Corporate Trainers</Span>
                    <span>Desktop/Laptop Hardware Trainer, Microsoft Windows 7, 8, 10-OS Client and 2008/2012 Server
                        Based OS Trainer, D-link Network Associate & HP Network Certified Trainer. <br>13+ Years of
                        Experience in Computer Training</span><br>
                    <a href="#"><button class="btn4">Read More</button></a>
                </div>
            </div>
        </div>

        <div class="second">
            <h3 style="font-weight: 300; padding-right: 3vw;">Learn</h3>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Full Stack</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Web
                    Designing</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Business
                    Intelligence</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Cloud
                    Computing</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Cyber
                    Security</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Digital
                    Marketing</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">DevOps</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Networking</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Project
                    Management</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Software
                    Development</button></a>
            <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn5">Graphic
                    Designer</button></a>
        </div>

    </div>
    <div class="second2">
        <h3 style="font-weight: 300;">Learn</h3>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Full Stack</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Web Designing</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Business
                Intelligence</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Cloud Computing</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Cyber Security</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Digital
                Marketing</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">DevOps</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Networking</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Project
                Management</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Software
                Development</button></a>
        <a href="http://itteamwork.infinityfreeapp.com/contactus.php"><button class="btn6">Graphic Designer</button></a>
    </div>


    <!-- Why chooe us -->
    <div class="why">
        <div class="why-first">
            <h2 style="color: #1474BA;">WHY US?</h2>
        </div>

        <div class="why-sec">
            <div class="us">
                <img src="./Assets/teachers.webp" alt="">
                <h3> Professional teacher</h3>
            </div>
            <div class="us">
                <img src="./Assets/fees.webp" style="margin-left: 2.5vw;">
                <h3> Affordable fees structure</h3>
            </div>
            <div class="us">
                <img src="./Assets/infra.png" alt="">
                <h3> Modern infrastructure</h3>
            </div>
            <div class="us">
                <img src="./Assets/environmrent.webp" alt="">
                <h3> Disciplined environment</h3>
            </div>
        </div>
    </div>


    <!-- php insert query -->

    <!-- Contact page -->
    <div class="contact">
        <form method="post" action="">
            <div>
                <img src="https://cdn4.iconfinder.com/data/icons/basic-user-interface-elements/700/mail-letter-offer-256.png"
                    alt="icon">
            </div>
            <input type="text" id="name" name="name" placeholder="Name (required)" required>
            <input type="email" id="email" name="email" placeholder="Enter Email address (required)" required>
            <input type="number" id="phone" name="phone" placeholder="Enter Mobile Number  (required)" required>
            <input type="text" id="topic" name="topic" placeholder="Topic (required)" required>
            <textarea placeholder="Subject (required)" id="subject" name="subject" required></textarea>
            <input type="submit">
        </form>
    </div>
</div>


<?php
// include './Partial/Footer.php'
?>