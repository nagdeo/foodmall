    <?php
include('login_r.php'); 

if(isset($_SESSION['login_user1'])){
header("location: addFood.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Restaurant Login </title>
  <link rel="stylesheet" type = "text/css" href ="css/mediaQuery.css">
    </style>
  </head>
  

  
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body >
   <div class="displayNoneMore1200" style="text-align:center;padding: 6rem 2rem;font-size: 3.5rem">Screen size is too less for this website, Screen size should be 1200 or above.</div>
   <div class="displayNoneLess1200"> 

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" style="color:white;">FoodMall</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            
          </ul>

          
        </div>

      </div>
    </nav>

  <div style="position:relative">
    <img src="images/reslogin8.jpg" style="width:100%;height:30rem;">
    <div class="" style="margin-top: 4%; margin-bottom: 2%;position:absolute;top:25%;left:15%;">
        
      <div class="">
       
        <div class="panel panel-primary" style="border-color:darkolivegreen;width:50rem;">
          <div class="panel-heading" style="background-color:darkolivegreen;border:1px solid darkolivegreen;"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
              
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
         <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
         <div class="row" >
          <div class=" col-xs-4">
              <button class="btn" style="background-color:darkolivegreen;color:white;" name="submit" type="submit" value=" Login ">Submit</button>
          </div>

         </div><br>
        <label style="margin-left: 5px;">Don't have an account...?</label> 
        <label style="margin-left: 5px;"><a href="myrestaurant.php">Create a new account.</a></label>

        </form>
        </div>     
      </div>      
    </div>
    </div>
  </div>
   </div> 
      
    </body>
</html>