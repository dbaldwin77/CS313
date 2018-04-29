<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="Scripts/script01.js"></script>
    <link rel="stylesheet" href="Stylesheets/stylesheet01.css"/>
      <title>My page</title>
      
  </head>
  <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
           <a class="navbar-brand" href="#">David Baldwin</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
             <span class="navbar-toggler-icon"></span>
           </button>
               <!-- below is a collapsable navbar that turns into a button which opens the item to view from the navbar when it is collapsed -->
           <div class="collapse navbar-collapse" id="collapsibleNavbar">
             <ul class="navbar-nav">
               <li class="nav-item">
                 <a class="nav-link" href="assignments/index.html">CS 313 Assignments</a>
               </li>
                
             </ul>
           </div>  
         </nav>
        
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
        
   
          <div class="carousel-inner">
            
            <div class="carousel-item active">
              <img src="images/IMG_0770.jpg" alt="me and my wife" class="img-fluid p-5">
            </div>
        
            <div class="carousel-item">
              <img src="images/IMG_1058.jpg" alt="my kids" class="img-fluid p-5">
            </div>

          </div>
        
    
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
          <p class="pclass">Major: Software Engineering</p>
          <p class="pclass">Semester: Spring 2018</p>
          <input id="button1" type="button" value="Hide Schedule" >
          <div id="div1">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Course</th>
                <th>Course Description</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CS313</td>
                <td>Web Engineering II</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>CS246</td>
                <td>Software Design & Development</td>
                <td>Online</td>
              </tr>
                <td>CIT 270</td>
                <td>Systems Security</td>
                <td>Online</td>
              </tr>
              <tr>
                <td>CS 261</td>
                <td>Mobil App Development</td>
                <td>Online</td>
              </tr>            
            </tbody>
          </table>
          </div>
  </body>
</html>
