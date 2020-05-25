
<!DOCTYPE HTML>  
<html>
<head>

<meta charset="utf-8"/>
  <meta name="description" content="Development Project Product" />
  <meta name="keywords" content="HTML,Javascript,CSS" />
<link href="stylesdevops.css" rel="stylesheet" type="text/css"/> 
<link href="contact_us.css" rel="stylesheet" type="text/css"/>

<style>
.error {color: #FF0000;}
</style>
</head> 
<body>  

<header>
  <img id="product_logo" src="images/logo.png" alt="pdlogo" />
  <h1 class="product_name"> One Stop Movies </h1>
</header>

<hr>

<center>
<h2>Contact Us</h2>
</center>


<?php


$name = $name_error = "";
$email = $email_error =  "";
$number = $number_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $name_error = "Name is required";
  } 

  else 
  {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
    {
      $name_error = "Please use letters only!";
    }
  }
  
  if (empty($_POST["email"])) 
  {
    $email_error = "Email is required";
  } 

  else 
  {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $email_error = "Invalid email format";
    }
  }
    
  if (empty($_POST["number"])) 
  {
    $number = "";
  } 

  else 
  {
    $number = test_input($_POST["number"]);
    
    if (!preg_match("/^[0-9]{10}+$/", $number)) 
    {
      $number_error = "Invalid Number";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class = "container">
<p><span class="error">* Important fields</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Name: <span class="error">*</span> <input type="text" name="name" placeholder="John Doe" value="<?php echo $name;?> ">
  <span class="error"><?php echo $name_error;?></span>
  <br><br>

  E-mail: <span class="error">*</span> <input type="text" name="email" placeholder="someone@example.com" value="<?php echo $email;?>">
  <span class="error"><?php echo $email_error;?></span>
  <br><br>

  Mobile: <input type="text" name="number" placeholder="04xx xxx xxx" value="<?php echo $number;?>">
  <span class="error"><?php echo $number_error;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>
</div>


</body>
</html>
