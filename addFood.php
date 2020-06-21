<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: reslogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


   

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color:white;">Foodmall</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
           
          </ul>

          <ul class="nav navbar-nav navbar-right">
              <li><a href="#" style="color:white;text-transform: capitalize;">Welcome <?php echo $login_session; ?> </a></li>
          
            <li><a href="logout_m.php">Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>





<div style="margin: auto;width:100%">
   <div style="position:relative;width: 100%">
    <img src="images/login3.jpg" style="width:100%;height:30rem;">
      <div class="" style="padding: 0px 100px ;position:absolute;top:25%;left:10%;background: white;border: 2px solid darkolivegreen">
          
          <form action="addFoodToRes.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;color: darkolivegreen;"> ADD NEW FOOD ITEM HERE </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Food name" required="">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Food Price (INR)" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="description" name="description" placeholder="Food Description" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="images_path" name="images_path" placeholder="Food Image Path [images/<filename>.<extention>]" required="">
          </div>
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Preference: </label>
              <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio1" name="pref" value="Veg" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1" required>Veg</label>
</div>
<div class="custom-control custom-radio">
    <input type="radio" id="customRadio2" name="pref" value="Non-Veg" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">Non-Veg</label>
</div> 
            <br>
          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn" style="background-color: darkolivegreen;color: white"> ADD FOOD </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>