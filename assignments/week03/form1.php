<!DOCTYPE html>
    <html>
        <head>
          <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
          <title>Cart</title>
          <script type="text/javascript" src="../../Scripts/script03.js"></script>
          <link rel="stylesheet" href="../../Stylesheets/stylesheet03.css"/>	
	   	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        </head>
        <body>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#">Cart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Back to Pens & Pencils</a>
        </li>
			</ul>
		</div>
		</nav><br/>
          
		<?php
		
		  $myTotal = $_POST["totalamount"];
		  $itemOne = $_POST["itemone"];
		  $itemTwo = $_POST["itemtwo"];
		  $itemThree = $_POST["itemthree"];
			  
		  echo "<form style=\"padding-top: 40px; padding-bottom: 120px\" name=\"confirm\" action=\"form2.php\" method=\"post\">";
			  echo "<p><h2>Checkout</h2><br/></p>";
			
			  if($itemOne == "Box of 100 pencils" || $itemOne == "Box of 200 pencils" || $itemOne == "Box of 300 pencils" || $itemOne == "Box of 400 pencils")
			  {
			  echo $itemOne."<br/>";
			  }
			  if($itemTwo == "Box of 5 erasers" || $itemTwo == "Box of 10 erasers" || $itemTwo == "Box of 15 erasers" || $itemTwo == "Box of 20 erasers")
			  {
			  echo $itemTwo."<br/>";
			  }
			  if($itemThree == "Box of 10 pens" || $itemThree == "Box of 20 pens" || $itemThree == "Box of 30 pens" || $itemThree == "Box of 40 pens")
			  {
			  echo $itemThree."<br/>";
			  }
		
			  echo "</p>";
			  echo "<p><strong>Total cost: $</strong>";
			  echo $myTotal."</p>";
			  
			  echo "<p>Enter your address:</p>";
			  echo "<input style=\"text-align:center\" type=\"text\" size=\"40\" name=\"address\"></br></br>";
		  echo "<input name=\"cancel\" type=\"submit\" value=\"Cancel\">";
		  echo "<input name=\"confirm\" type=\"submit\" value=\"Continue to Check Out\">";
		  
		  
		  echo "<br/><input style=\"visibility: hidden;\" type=\"text\" name=\"myTotal1\" value=\"$myTotal\">";
		  echo "<br/><input style=\"visibility: hidden;\" type=\"text\" name=\"Item1\" value=\"$Item1\">";
		  echo "<br/><input style=\"visibility: hidden;\" type=\"text\" name=\"Item2\" value=\"$Item2\">";
		  echo "<br/><input style=\"visibility: hidden;\" type=\"text\" name=\"Item3\" value=\"$Item3\">";
		
		
		  echo "</form>";
		?>
        </body>
    </html>