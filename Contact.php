
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
  <img id="product_logo" src="logo.webp" alt="pdlogo" />
  <h1 class="product_name"> One Stop Movies </h1>
</header>

<hr>

<center>
<h2>Contact Us</h2>
</center>


<?php


$userdetail = $userdetail_error = "";
$email = $email_error =  "";
$number = $number_error = "";
$messagearea = $messagearea_error = "";
$complaintstype_error ="";
$complaintstype = $_POST["complaintstype"];

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["userdetail"])) 
  {
    $userdetail_error = "Name is required";
  } 

  else 
  {
    $name = test_input($_POST["userdetail"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$userdetail)) 
    {
      $userdetail_error = "Please use letters only!";
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
    $number_error = "Number is required";
  } 

  else 
  {
    $number = test_input($_POST["number"]);
    
    if (!preg_match("/^[0-9]{10}+$/", $number)) 
    {
      $number_error = "Invalid Number";
    }
  }

  if (empty($_POST["messagearea"])) 
  {
    $messagearea_error = "Complaint is required";
  }

  if($complaintstype =="none")
  {
    $complaintstype_error ="Complaint type is required";
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

  Name: <span class="error">*</span> <input type="text" name="userdetail" placeholder="peter" value="<?php echo $userdetail;?>">
  <span class="error"><?php echo $userdetail_error;?></span>
  <br><br>  

  E-mail: <span class="error">*</span> <input type="text" name="email" placeholder="someone@example.com" value="<?php echo $email;?>">
  <span class="error"><?php echo $email_error;?></span>
  <br><br>

  Mobile: <input type="text" name="number" placeholder="04xx xxx xxx" value="<?php echo $number;?>">
  <span class="error"><?php echo $number_error;?></span>
  <br><br>

Select the type of Complaint:
  <select name="complaintstype" id="complaintstype">  
    <option value="none" selected="selected">Select an option</option>
    <option value="Service">Service</option>
    <option value="Price">Price</option>
    <option value="Refund">Refund</option>
  </select>
  <span class="error"><?php echo$complaintstype_error;?></span>
  <br><br>  

   
  Please Enter your complaint here.<textarea id="messagearea" rows="5" cols="50" value="<?php echo $messagearea;?>"></textarea>  
  <span class="error"><?php echo $messagearea_error;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <button class="button" type="reset" id="cancel" onclick="location.href='product.php';"" value="Go to home page">Cancel Complaint</button>
</form>
</div>



</body>
</html>
