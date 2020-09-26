<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MOTOROLA Registration Form</title>
<style>

*{
    box-sizing: border-box;
}

BODY{
            MARGIN:30px 150PX;
            background: url(img/RDX4.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center CENTER;
            background-attachment: fixed;
            BORDER: 7PX SOLID #F0F;
            padding: 30px 50px;
            #WIDTH:80%;
            #POSITION:MIDDLE;
}
input[type="text"],[type="password"],[type="number"],[type="date"],[type="search"],[type="file"]{
  width: 150px;
  display: inline-block;
  margin-bottom: 1px;
  #background-color: yellow;
  #position:center;
  
}
input[type=text]:focus {
  background-color: lightblue;
    transition: 3s;

}


#iBox{
  margin:auto;
  #float:center;
  #border: 15px solid blue;
}

.RDX{
  
  BACKGROUND-COLOR: #4267B2;
  #BORDER:2PX SOLID #00F;
  WIDTH:80%;
  TEXT-ALIGN:CENTER;
  align-items: center;
  FLOAT: center;
  color:#ffffff;
  font-weight:bold;
  font-family:courier;
  margin-left: 136px;
  font-size:26px;
  #display:inline-block;
}

#SUBMIT{
  box-sizing: border-box;
  #display: inline-block;
  float:middle;
  BACKGROUND-COLOR: #0F0;
  BORDER:2PX SOLID #CCC;
  WIDTH:70%;
  #POSITION:center;
  float: none;
line-height: normal;
  #position: static;
#z-index: auto;
margin-left: 106px;
}

</style>
</head>
<body>

<form>
    <fieldset>
        <legend style="font-family:courier; font-size:50px;"> <b>RDX Registration Form</b> </legend>
 <P CLASS="RDX"> R-D-X FILE</P><br>
First Name: <input type="text" id="iBox" PLACEHOLDER="Your Firstname:"> <br><br>
Middle Name: <input type="text" id="iBox" PLACEHOLDER="Your Midname:"> <br><br>
Last Name: <input type="text" id="iBox" PLACEHOLDER="Your Lastname:"> <br><br>

Age.: <input type="number" id="iBox" placeholder="Your Age. "> <br><br>

Phone No.:<input type="tel" id="iBox"  placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
Password:<input type="password" id="iBox"> <br><br>
Date: <input type="date" id="iBox"> <br><br>
Select Gender:<br><br>
<input type="radio" id="iBox" name="gender">Male
<input type="radio" id="iBox" name="gender">Female­ <br><br>

<script>

    let mathOne = Math.floor(Math.random()*10);
    let mathTwo = Math.floor(Math.random()*10);
    document.write(mathOne+" + "+mathTwo+" = " ) 
    </script>

<input type="text" PLACEHOLDER="Type Captcha:"> 

    <br> <br>

Search: <input type="search" style="background-image: url('searchicon.png');background-position: 10px 10px;" ><br><br>

<input type="reset"><br><br>
<button type="submit" ID="SUBMIT" value="submit" style="height:35px width:250px;">Log In</button><br><br>
</fieldset>
<br><br>

Upload Image: <br><br><input type="file" ><br><br>
<button onclick="window.print()">Print this page</button>

<p>.........HI.........</p>

</form>
</body>
</html>