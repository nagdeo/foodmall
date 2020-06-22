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
    <title> Order </title>
  </head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link rel="stylesheet" type = "text/css" href ="css/mediaQuery.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap-4.5.0-dist/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">FoodMall</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
  </ul>


<?php

 if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right" style="position: absolute;right:1rem">
               <li style="margin-right:1rem;"><a href="#" style="color: white"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            
            <li><a href="logout_u.php" style="color:white">Log Out </a></li>
          </ul>
  <?php        
}

?>
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
      <div style="margin: auto;width:50%;text-align: center;margin-top:2rem ">
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