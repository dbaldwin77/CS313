<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>My Title</title>
      <script type="text/javascript" src="../Scripts/script02.js"></script>
      <link rel="stylesheet" href="../Stylesheets/stylesheet02.css"/>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
    
    <div id="div1" class="divClass" >DIV 1</div>
    <div id="div2" class="divClass" >DIV 2</div>
    <div style="display: none" id="div3" class="divClass" >DIV 3</div><br/>
    <input type="button" value="Click Me" onclick="clickButton();"><br/><br/>
    <label for="txtColor">Color:</label> <input type="text" id="txtColor" placeholder="#cccccc">
		<button id="color" onclick="changeColor();">Change color for DIV 1</button><br/><br/>
		
		<script>

		$(document).ready(function(){
    $("#button2").click(function(){
        $("#div2").css("background-color", "green");
    });
		});
		
		$(document).ready(function(){
    $("#button3").click(function(){
        $("#div3").fadeIn(4000);
    });
		});
		</script>
		</script>
		<button id="button2">Change color for DIV 2 to green</button><br/><br/>
		<button id="button3">Make DIV 3 visible</button>
		
  </body>
</html>


