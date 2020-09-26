<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Display the countdown timer in an element...EDITED BY MONTASIR_RD007 -->

<html>
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
            body{
            background: linear-gradient(rgba(0,0,0,1.0),rgba(0,0,0,0.9)),url(img/RDX1.jpg);
            text-align: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center top;
            background-attachment: fixed;
            }
    .graduation{
        color: #f00;
        font-size: 65px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-weight: bold;
        text-align: center;
        display: inline-block;
    }

    #demo{
        font-size: 65px;
        border: 2px solid #f0f;
        padding: 10px;
        margin: auto;
        text-align: center;
        width: 50%;
        background: #000;
    }
        </style>
    </head>



<div class="graduation">
    <p>
        Completation 	 OF	Graduation.  BSC. ENG[CSE] 
    </p>
</div>




<p> 
<center>
<font color="red"><font size="150"> T minus--<font color="CYAN"><font size="8">
</center>



<p><center>



<div id="demo"> </div>

</center>
</p>


</font>
</strong>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 01, 2021 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>




</body>
</html>

