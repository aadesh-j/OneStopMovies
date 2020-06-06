
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TicketCompare</title>  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/snacks.css">

</head>
	
<body>
	<form action="payment.php" id="snackspage">

		<div class="container">
		<header>
	<img id="product_logo" src="images/logo.png" alt="pdlogo" />
	<h1 class="product_name"> One Stop Movies </h1>
	</header>
	        <h1> Snacks</h1>
			<br />
	    </div>
	    <div class="container">
	        
	    	<h2> Popcorn</h2>
	    	
	    </div>
	    
	    <div class="container">
	    	 <img src="images/popcorn.png" 
	        alt="popcorn" height="120px" width="120px" style="float: left; clear: left; margin-right: 5%;">
	        <h3> Sizes</h3>
	  		<label for="smallcorn">$6 Small</label>
	    	 	<select name="smallcorn" id="smallcorn">
	    	 		<option value=""></option>
	    	 		<option value="1smallcorn">1</option>
	    	 		<option value="2smallcorn">2</option>
	    	 		<option value="3smallcorn">3</option>
	    	 	</select>
	    	 </br>
	    	 <label for="medcorn">$10 Medium</label>
	    	 	<select name="medcorn" id="medcorn">
	    	 		<option value=""></option>
	    	 		<option value="1medcorn">1</option>
	    	 		<option value="2medcorn">2</option>
	    	 		<option value="3medcorn">3</option>
	    	 	</select>
	    	 </br>
	    	 <label for="lcorn">$10 Medium</label>
	    	 	<select name="lgcorn" id="lgcorn">
	    	 		<option value=""></option>
	    	 		<option value="1lgcorn">1</option>
	    	 		<option value="2lgcorn">2</option>
	    	 		<option value="3lgcorn">3</option>
	    	 	</select>
	    </div>


	    <div id="drinks" class="container">
	        
	    	<h2> Drinks</h2>
		
	    </div>

	    <div id="drinkswrapper">
	 
	  			<!--img src="images/drinks2.png" alt="popcorn" height="120px" width="140px" style="float: left; clear: left; margin-right: 5%;"> -->

	 			
		
	           <div id="drinktype" class="container">
				<img src="images/drinks.png" alt="popcorn" height="120px" width="140px">
		    	 
		        <h3> Choices</h3>
		        <label for="coke">Coke</label>
		  		<input type="radio" name="drinktype" id="coke" value="coke"><br>
		  		<label for="sprite">Sprite</label>
		  		<input type="radio" name="drinktype" id="sprite" value="sprite"><br>
		  		<label for="fanta">Fanta</label>
		  		<input type="radio" name="drinktype" id="fanta" value="fanta"><br><br>
		  	</div>

		  	<div id="drinksize" class="container">
		  		<h3> Sizes</h3>
		  		<label for="small">$4 Small</label>
		  		<input type="radio" name="drinksize" id="small" value="small"><br>
		  		<label for="med">$6 Medium</label>
		  		<input type="radio" name="drinksize" id="med" value="medium"><br>
		  		<label for="large">$8 Large</label>
		  		<input type="radio" name="drinksize" id="large" value="large"><br>
		    </div>
	    </div>




	    <div class="container">
	        
	    	<h2> Dessert</h2>
	    	
	    </div>

	    <div class="container">
	    	 <img src="images/cornetto.png" alt="popcorn" height="120px" width="120px" style="float: left; clear: left; margin-right: 5%;">
	    	 <label for="cornetto">$4.5 Cornetto</label>
	    	 	<select name="cornetto" id="cornetto">
	    	 		<option value=""></option>
	    	 		<option value="1cnetto">1</option>
	    	 		<option value="2cnetto">2</option>
	    	 		<option value="3cnetto">3</option>
	    	 	</select>
	    	 </br>
	    	 <label for="magnum">$4.8 Magnum</label>
	    	 	<select name="magnum" id="magnum">
	    	 		<option value=""></option>
	    	 		<option value="1mag">1</option>
	    	 		<option value="2mag">2</option>
	    	 		<option value="3mag">3</option>
	    	 	</select>



	    </div>
	    <div class="container">
	    	<input type="submit" value="checkout">
	    </div>
	</form>


</body>
</html>

