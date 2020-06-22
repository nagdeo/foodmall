<?php
include('session_r.php');

if(!isset($login_session)){
header('Location: reslogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Add Food </title>
    
  </head>
   <link rel="stylesheet" type = "text/css" href ="css/mediaQuery.css">
  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script>
    
      function checkForm(){
           
          if(formname.pref.value == '') {
            alert("Please Select Food type");
            return false;
           }
           
             
      }
      
  </script>

  <body>
   <div class="displayNoneMore1200" style="text-align:center;padding: 6rem 2rem;font-size: 3.5rem">Screen size is too less for this website, Screen size should be 1200 or above.</div>
   <div class="displayNoneLess1200"> 

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
         
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
      <div class="" style="padding: 0px 10px ;text-align: left;width:50rem;position:absolute;top:25%;left:10%;background: white;border-radius:10px;border: 2px solid darkolivegreen">
          
          <form name="formname" onsubmit="return checkForm()" action="addFoodToRes.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;color: darkolivegreen;"> ADD FOOD ITEM  </h3>

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
            <select type="text" class="form-control" id="images_path" name="images_path"  required>
                <option>images/coffee.jpg</option>
                <option>images/burger.jpg</option>
                <option>images/frenchfries.jpg</option>
                <option>images/Pizza.jpg</option>
                <option>images/puff.jpg</option>
                <option>images/nonveg_biryani.jpg</option>
                <option>images/vegThali.jpg</option>
                <option>images/Spring_Rolls.jpg</option>
                <option>images/tea.jpg</option>
                <option>images/Masala_Paneer_Roll.jpg</option>
                <option>images/biryani_chicken.jpg</option>
                <option>images/butterChicken.jpg</option>
                <option>images/fried_chicken.jpg</option>
                <option>images/roll.jpg</option> 
                <option>images/Chicken_Burger.jpg</option>
                <option>images/paneer_pakora.jpg</option>
                <option>images/samosa.jpg</option>
                <option>images/Pakora.jpg</option>  
                <option>images/Chocolate_Golgappe.jpg</option>
                <option>images/Pizza_nonVeg.jpg</option>
                <option>images/nonveg_momos.jpg</option>
                <option>images/nonveg_curry.jpg</option>
                <option>images/nonveg_biryani.jpg</option>
            </select>
          </div>
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Food Type: </label>
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

</div>  

</body>
</html>