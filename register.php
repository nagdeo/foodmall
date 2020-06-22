<?php
  $error='';
  require 'connection.php';
$conn = Connect();
   if($_SERVER["REQUEST_METHOD"]=="POST"){
       $fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['password']);
$preference=$conn->real_escape_string($_POST['pref']);


 $sqlUser="Select * from customer where username='$username'";
          $result1 = mysqli_query($conn, $sqlUser);
          if (mysqli_num_rows($result1) > 0)
          {
             $error='Username already Exist';
            
          }
          else{
              $query = "INSERT into customer(name,username,email,contact,address,password,pref) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."','" . $preference ."')";
$register = $conn->query($query);
                       if (!$register){
	die("Couldnt enter data: ".$conn->error);
              }else{
                  header("location: customer_registered_success.php"); 
              }
          }
          $conn->close();
   }
?>
<html>
<head>
    <title> Customer SignUp </title>
    
  </head>
  <link rel="stylesheet" type = "text/css" href ="css/mediaQuery.css">
  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
  <script>
    
      function checkForm(){
           
          if(formname.pref.value == '') {
            alert("Please Select Preference");
            return false;
           }
           if(formname.contact.value.length!=10){
               alert("Contact Should be of 10 digits");
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
            <a class="navbar-brand" href="index.php" style="color: white">FoodMall</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            
          </ul>

          
        </div>

      </div>
    </nav>
  <div style="position:relative">
    <img src="images/login3.jpg" style="width:100%;height:30rem;">
    <div class="" style="margin-top: 4%; margin-bottom: 2%;position:absolute;top:25%;left:10%">
      <div class="">
          <div class="panel panel-primary" style="border-color: darkolivegreen;width: 45rem;">
          <div class="panel-heading" style="background-color: darkolivegreen;"> Create Account </div>
        <div class="panel-body">
          
            <form name="formname" onsubmit="return checkForm()" action="" method="POST">
          <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
            <div class="">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="">
              <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
            <div class="">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
   
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
            <div class="">
              <input class="form-control" id="contact" onKeyPress="if(this.value.length===10) return false;"
                     type="text" name="contact" placeholder="Contact" required >
              
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
            <div class="">
              <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
             
            </div>           
          </div>
        </div>
        <div class="row">
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
          </div>
        </div>

        
       
        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn " style="background-color: darkolivegreen;color:white;" type="submit" >Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
        <label style="margin-left: 5px;"><a href="customerlogin.php">Have an account? Login.</a></label>

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
  </div>
  </div>  
    </body>
</html>