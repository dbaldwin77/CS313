<!DOCTYPE html>
    <html>
        <head>
          <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
          <title>Confirmation Page</title>
          <script type="text/javascript" src="../../Scripts/script03.js"></script>
          <link rel="stylesheet" href="../../Stylesheets/stylesheet03.css"/>	
	   	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        </head>
        <body>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#">Confirmation Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>


		</nav><br/>

<?php

  $itemOne = $_POST["Item1"];
  $itemTwo = $_POST["Item1"];
  $itemThree = $_POST["Item1"];
  $address = $_POST["address"];
  $confirm = $_POST["confirm"];
  $cancel = $_POST["cancel"];
  
  if($confirm == 'Continue to Check Out')
  {
  echo "<form style=\"padding-top: 120px; padding-bottom: 330px;\"  action=\"index.html\" method=\"post\">";
  echo "<p>Thank you for your purchase</p>";
  echo "<p>Your Purchase will be sent your addrees</p>";
  echo$address."</br></br>";
  
  
  echo "<input name=\"ok\" type=\"submit\" value=\"Continue\">";
  echo "</form>";
  }
  if($cancel == 'Cancel')
  {
  echo "<form style=\"padding-top: 120px; padding-bottom: 330px;\"  action=\"index.html\" method=\"post\">";
  echo "<p>Your order has been canceled</p>";
  echo "<input name=\"ok\" type=\"submit\" value=\"Continue\">";
  echo "</form>";
  }
  
?>

</body>
</html>