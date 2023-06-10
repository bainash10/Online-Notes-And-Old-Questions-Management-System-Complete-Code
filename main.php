<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<html>
    <head><title>Homepage</title>
      <link rel="stylesheet" href="main.css">
    </head>
    
    <body>
      
    <div id="header">
        <div id="right"><button><a href="logout.php">Logout</a></button></div> 
            <center><h2 style="padding: 0%;">ONLINE NOTES AND OLD QUESTIONS</h2></center>
        </div>
<!-- menu part  -->
<div id="menu">
        <nav>
            <a href="#"><img src="Images/home.png" width="25px">Home</a>
            <a href="Homepage files/1-Online Notes.php" target="_blank"> <img src="Images/Online Notes.png" width="25px">Online Notes</a>
            <a href="Homepage files/2-Old Questions.php" target="_blank"><img src="Images/Old Questions.png" width="23px">Old Questions</a>
            <a href="Homepage files/3-Contact Us.php" target="_blank"><img src="Images/contact.png" width="25px">Contact Us</a>
            <div class="animation start-home"></div>
          </nav>  
        </div>  
     
    <div id="body">
        <div class="bodyopen">
         <marquee behavior="scroll">Hello Everyone, Get Online Notes and Old Questions for free.</marquee> 
        </div>
      
        <div class="content">
            <h1>Our Services</h1>
            <div class="include">
                <div class="service">
                  <img src="Images/services notes.png" width="10%">
                    <h2><a href="Homepage files/1-Online Notes.php">Online Notes</a></h2>
                    <p>Get Notes to Read.</p>
     
                </div>
                <div class="service">
                 <img src="Images/services questions.png" width="10%">
                    <h2> <a href="Homepage files/2-Old Questions.php">Old Questions</a></h2>
                    <p>Check the Past Questions.</p>
     
                </div>
              
                <div class="service">
                 <img src="Images/services call.png" width="10%">
                
                  <h2> <a href="#" onclick="alert('9841111111')"> 24/7 Call</a></h2>
                    
                    <p>If any questions Call Mr. Nischal</p>
     
                </div>
            </div>
        </div>
        <br>
      <section class="about-us">
        <div class="about">
        <img src="Images/About Us Photo.jpg" class="pic">
        <div class="text">
            <h2>About Us</h2>
            <h5>Project By: Nischal Baidar</h5>
           
            <script src="JavaScript Files/Digital Clock.js"></script>
            Current Time:<span id="clock"></span>
            <p>He is currently studying Computer Engineering, and He is working on many interesting projects related to computer. He is learning Arduino Uno, and his recent project on Arduino is a soil moisture finder, Smoke Detection and Automatic Door. He is now working and researching on a mind-controlled wireless robotic arm using a Brain-Computer Interface. He is also researching and learning about Cybersecurity, Intermediate Python, Machine Learning, SEO research and Artificial Intelligence.</p>
            <div class="data">
              <script src="JavaScript Files/Mail To.js"></script>
            <a href="#" class="hire" onclick="sendEmail()">Hire Me</a>
            </div>
        </div>
        </div>
    </section> 
<br>

    </div>

    <div id="footer">
     
    
            <div class="social">
                <center>Find Us On</center> 
                <center>
                        <a href="https://www.facebook.com/nischal.baidar/" target="_blank"><img src="Images/facebook.png" width="30px"></a>
                        <a href="https://nischalbaidar.com.np/" target="_blank"><img src="Images/weblogo.png" width="30px"></a>
                        <br>
                        Current Date:<span id="date"></span>
                     <script src="JavaScript Files/Current Date.js"></script>
                    </center>
                    </div> 
                  
                    <center>  <h5>© All rights reserved by Nischal Baidar</h5> </center>
   
</div>

    </body>
</html>