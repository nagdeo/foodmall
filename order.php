<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> Cart | Le Cafe' </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/cart.css">
     <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


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
            <a class="navbar-brand" href="index.php" style="color: white;">FoodMall</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
           </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
               <li><a href="#" style="color: white"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            
            <li><a href="logout_u.php">Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="#"> Admin Login</a></li>
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

 <?php   
     $F_ID= $_GET['id'];
     $order_id;
     $sqlFood = "SELECT * FROM food WHERE f_id = '$F_ID' ";
     $resultFood = mysqli_query($conn, $sqlFood);
     $c_id=0;

      if (mysqli_num_rows($resultFood) > 0)
      {
 
        while($rowFood = mysqli_fetch_assoc($resultFood)){
    
         $foodname = $rowFood["name"];
         $price =  $rowFood["price"];
        }
      }
      $username = $_SESSION["login_user2"];
      $sqlUId = "SELECT cust_id FROM customer WHERE username = '$username' ";
      $resultUID = mysqli_query($conn, $sqlUId);

      if (mysqli_num_rows($resultUID) > 0)
      {
 
        while($rowUId = mysqli_fetch_assoc($resultUID)){
    
          $c_id= $rowUId["cust_id"];
        }
      }
      
      
   $quantity = $_POST['quantity'];
    $R_ID = $_GET['Rid'];
    
    $order_date = date('Y-m-d');


     $query = "INSERT INTO orders (f_id, foodname, price,  quantity, order_date, c_id, r_id) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $c_id . "','" . $R_ID . "')";
             

              $success = $conn->query($query);         
               
      if(!$success)
      {
        ?>
        <div style="text-align: center;">
          <div class="]">
            <h1>Something went wrong!</h1>
            <p>Try again <a href="index.php">Order Now</a>.</p>
          </div>
        </div>

        <?php
      }else{
          $sqlOrderId = "SELECT * FROM orders Order by o_id DESC LIMIT 1";
          $resultOrderId = mysqli_query($conn, $sqlOrderId);
           if (mysqli_num_rows($resultOrderId) > 0)
           {
              while($rowOrderId = mysqli_fetch_assoc($resultOrderId)){
                     $order_id= $rowOrderId['o_id'];
              } 
           }
           
          ?>
      <div style="margin: auto;width:50%;text-align: center">
          <h3>Order Successfully Placed!!! &#128522;</h3>
          <h2>Your Order Id is <?php echo $order_id?></h2>
          <h5>Please keep cash available with you.... </h5>
          <h5>You will receive your order within 30 min! &#128522;</h5>
          <h4>Do you want to order something else...<a href="index.php">Order Now</a>.</h4>
      </div>
      <?php
          
      }
      
  ?>
    </body>
</html>