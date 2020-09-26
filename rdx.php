<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="An awesome single page portfolio html template.You can easily design your portfolio website using this template.">

    <meta http-equiv="X-UA-Compatible" Content="IE=edge">
    <title>Cuda- An awesome single page portfolio html template</title>
    <link rel="shortcut icon" href="resources/img/favicon.png" type="image/x-icon">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">    
     
    <!--<script src="https://use.fontawesome.com/d1cf6ecade.js"></script>-->
    <!-- Font Awesome-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- vendors files-->
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/grid.css" >
  

    <!-- resources files-->
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/responsive.css">



    <style>
    header{
    background:linear-gradient(rgba(35,80,156,0.9),rgba(35,80,156,0.9)), url(resources/css/img/RDXheader-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;

    background-attachment: fixed;
    height: 85vh;
    position: relative;

}

.logo{
    height: 3.5rem;
    width: auto;
    margin-top: 3.5rem;
    float: left;
}

.hero-text-box{
    width: 114rem;
}
    </style>
</head>
<body>
   <!--START HEADER SECTION-->

 <header id="CS">
   <nav>
     <div class="row">
       <a href="index.html">
         <img src="resources/img/menu-logo.png" alt="index.html" class="logo">
       </a>
       <ul class="main-nav">
       <li><a href="snake.php" >SNAKE</a></li>
         <li><a class="php" href="CS.html">CS</a></li>
         <li><a href="form.php" >Form</a></li>
         <li><a href="file.php">File</a></li>
         <li><a href="books.php">Books</a></li>
         <li><a href="web.php">Web</a></li>
         <li><a href="notice.php">Notice</a></li>
         <li><a href="about.php">About Us</a></li>
         <li><a href="faq.php">FAQ</a></li>
         <li><a href="help.php">Help</a></li>
         <li><a href="https://rdxcuda.000webhostapp.com" target="_blank">Wordpress</a></li>
       </ul>

       <div class="mobile-menu">
         <span style="color: #fff;"  onclick="openNav()">
           &#9776;
         </span>
         <div id="myNav" class="overlay">

         <a href="javascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>

         <div class="overlay-content">
          <a onclick="closeNav()" href="snake.php">Snake</a>
          <a onclick="closeNav()" href="CS.php" target="_blank">CS</a>
          <a onclick="closeNav()" href="form.php">Form</a>
          <a onclick="closeNav()" href="file.php">File</a>
          <a onclick="closeNav()" href="books.php">Books</a>
          <a onclick="closeNav()" href="web.php">Web</a>
          <a onclick="closeNav()" href="contact.php">Notice</a>
          <a onclick="closeNav()" href="about.php">About Us</a>
          <a onclick="closeNav()" href="faq.php">FAQ</a>
          <a onclick="closeNav()" href="help.php">Help</a>
          <a onclick="closeNav()" href="https://rdxcuda.000webhostapp.com" target="_blank">Wordpress
/a>

         </div>
       </div>
     </div>
    </div>
   </nav>
   <div class="row">
     <div class="hero-text-box">
       <h1>Hello! This is the Page for Menu and it will redirect you to other pages.</h1>
        <a href="#contact" class="btn btn-hero">Work With Us!</a>
     </div>
   </div>
 </header>
 <!--END HEADER SECTION-->  

 <!--START VIDEO SECTION-->
<section class="video-section" id="video">

<div class="row">
  <h2>
    Our Videos
  </h2>
  <p class="little-description">
    Our videos are here!
  </p>
</div>




<div class="row">

  <div class="col span_1_of_2 movie">
    <div class="client-photo">
      <img src="resources/img/RDX1.jpg" alt="Chanel Iman">
     </div> 
      <div class="client-review">
        <h3>HACKER</h3>
        <video width="320" height="240" controls>
          <source src="resources/video/TVIDEO.mp4" type="video/mp4">
          <source src="resources/video/TVIDEO.mp4" type="video/ogg">
        Your browser does not support the video tag.
        </video> 
        <span class="role">
         A video of top top most hacker
        </span>
      </div>    
   </div>

   <div class="col span_1_of_2 movie">
    <div class="client-photo">
      <img src="resources/img/RDX2.jpg" alt="Chanel Iman">
     </div> 
      <div class="client-review">
        <h3>ANIL AMBANI</h3>
        <video width="320" height="240" controls>
          <source src="resources/video/UVIDEO.mp4" type="video/mp4">
          <source src="resources/video/UVIDEO.mp4" type="video/ogg">
        Your browser does not support the video tag.
        </video> 
        <span class="role">
         A video about Anil Ambani
        </span>
      </div>    
   </div>

   <div class="col span_1_of_2 movie">
    <div class="client-photo">
      <img src="resources/img/RDX3.jpg" alt="Chanel Iman">
     </div> 
      <div class="client-review">
        <h3>000 WEBHOST</h3>
        <video width="320" height="240" controls>
          <source src="resources/video/WVIDEO.mp4" type="video/mp4">
          <source src="resources/video/WVIDEO.mp4" type="video/ogg">
        Your browser does not support the video tag.
        </video> 
        <span class="role">
         A video about 000webhost
        </span>
      </div>    
   </div>

   <div class="col span_1_of_2 movie">
    <div class="client-photo">
      <img src="resources/img/RDX4.jpg" alt="Chanel Iman">
     </div> 
      <div class="client-review">
        <h3>ISHQ NE JALA DIYA</h3>
        <video width="320" height="240" controls>
          <source src="resources/video/XVIDEO.mp4" type="video/mp4">
          <source src="resources/video/XVIDEO.mp4" type="video/ogg">
        Your browser does not support the video tag.
        </video> 
        <span class="role">
         A video of Indian song and dance
        </span>
      </div>    
   </div>





</div>


</section>
<!--END VIDEO SECTION-->
 <!--START FOOTER SECTION-->
<footer class="footer-section">
  <div class="row">
    <ul>
      <li><a href="#">Facebook </a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Google+</a></li>
      <li><a href="#">LinkedIn</a></li>
      <li><a href="#">Dribbble</a></li>
      <li><a href="#">Behance</a></li>
      <li><a href="#">GitHub</a></li>
    </ul>
  </div>
</footer>
                                                       

<!--END FOOTER SECTION-->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="vendors/js/html5shiv.min.js"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="vendors/js/respond.min.js"></script>
<script src="vendors/js/selectivizr-min.js"></script>
<script src="vendors/js/animated-circle.js"></script>
<script src="vendors/js/mixitup.min.js"></script>

<script src="resources/js/main.js"></script>
</body>
</html>