<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
  <meta name="description" content="Development Project Product" />
  <meta name="keywords" content="HTML,Javascript,CSS" />
 	<link href="stylesdevops.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<header>
  <img id="product_logo" src="images/logo.jpg" alt="pdlogo" />
  <h1 class="product_name"> One Stop Movies </h1>
</header>

<hr>

<style>
body 
{
  background-color: #F2F4F4;
}
</style>

<center>
<?php
    echo "<img src='1.webp' alt='Payment Successful' style='width:250px;height=250px;' />";
?>
</center>

<center>
<?php
echo "<br>";
echo "<div style ='font:30px/20px Comic Sans MS,tahoma,sans-serif;color:#1ABC9C'> 
Payment Successful!</div>";
echo "<br>";
echo "<div style ='font: 18px/25px Comic Sans MS,tahoma,sans-serif;color:#17202A'> 
    Thank you for your purchase! Your amount of xx has been received!</div>";
echo "<br>";
?>
</center>

<hr>

<center>
<!--
<?php
echo "<div style ='font:18px/13px Consolas,tahoma,sans-serif;
color:#283747 
'> 
Your tickets will be sent to your provided email</div>";
?>
--> 
<div style="width: 540px; height: 65px; 
float: center; 
background: #fff; 
padding: 10px; 
margin-right: 10px; 
border-bottom: 2px solid #e2e2e2; 
text-align: center;
border-radius: 12px;">
        <p style="
        font-family: Comic Sans MS;
        font-size: 1.3em; 
        color:#666; 
        font-weight: 600; 
        padding-bottom: 5px; 
        padding-left: 20px; 
        text-align: center;">
        Your tickets will be sent to your provided email! 
        </p>
        
</div>
</center>

<hr><br><br><br><br>

<center>
<input type="button" 
style = "font:18px/10px Consolas;
font-weight: bold;
color:#FDFEFE; 
width:192px;
background-color:#3498DB;
border-color:#3498DB;
border-radius: 12px;
padding: 10px 20px;
padding-right: 18px;
" 
value="Back To Homepage" 
onclick="location='example.php'"
/>
</center>

</body>

</html>