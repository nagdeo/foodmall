<?php
session_start();
require 'connection.php';
$conn = Connect();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>FoodMall</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href ="css/bootstrap-4.5.0-dist/css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
   <link rel="stylesheet" type = "text/css" href ="css/mediaQuery.css">
   <script type="text/javascript" src=" js/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
</head>
<body>
    <div class="displayNoneMore1200" style="text-align:center;padding: 6rem 2rem;">Screen size is too less for this website, Screen size should be 1200 or above.</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark displayNoneLess1200">
  <!-- Brand -->
  <a class="navbar-brand" href="#">FoodMall</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
  </ul>
  <?php
if(isset($_SESSION['login_user1'])){

?>
  <ul class="nav navbar-nav navbar-right" style="position: absolute;right:1rem">
      <li style="margin-right: 1rem;"><a href="#" style="color: white;">Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
      <li style="margin-right: 1rem;"><a href="addFood.php" style="color: white;">Add food</a></li>
      <li style="margin-right: 1rem;"><a href="RestaurantOrder.php" style="color: white;">View Orders</a></li>
            <li><a href="logout_m.php" style="color: white;"> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
  <ul class="nav navbar-nav navbar-right" style="position: absolute;right:1rem">
      <li style="margin-right: 1rem;"><a href="#" style="color: white;"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li style="margin-right: 1rem;">
                        <span><a href="MyOrders.php" style="color: white;">My orders</a></span>
            </li>
            <li><a href="logout_u.php" style="color: white;"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>
  <ul class="nav navbar-nav navbar-right">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Sign Up
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="register.php">Customer</a>
        <a class="dropdown-item" href="myrestaurant.php">Restaurant</a>
        
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="customerlogin.php">Customer</a>
          <a class="dropdown-item" href="reslogin.php">Restaurant</a>
      </div>
    </li>
  </ul>
  <?php
}
?>
</nav>
 <marquee width="100%" direction="left" class="displayNoneLess1200" height="30px" style="background: black;color:white;padding:5px 0px;">
  Only Cash on Delivery is Available, Order By Click on Order Button directly.
</marquee>

<div id="carouselExampleInterval" class="carousel slide displayNoneLess1200" data-ride="carousel" style="margin-top: -0.4rem; ">
  <div class="carousel-inner">
      <div class="carousel-item active" style="height: 25rem;" data-interval="10000">
        <img src="images/slide001.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="height: 25rem;" data-interval="2000">
      <img src="images/login3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="height: 25rem;">
      <img src="images/slide003.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    
 <div class="container displayNoneLess1200" style="width:95%;">
 <?php
 $sql;
 $result;
 $foodCount=0;
 $foodCountRes=0;
 $sqlFoodcount="Select * from food ";
    $resultFoodCount = mysqli_query($conn, $sqlFoodcount);
    $foodCount= mysqli_num_rows($resultFoodCount) ;
   
if(isset($_SESSION['login_user1'])){
    $Uname=$_SESSION['login_user1'];
    $r_id;
    $r_name;
    $sqlType="Select r_id,name from restaurant where username='$Uname'";
    $result1 = mysqli_query($conn, $sqlType);
    if (mysqli_num_rows($result1) > 0)
     {
     while($row = mysqli_fetch_assoc($result1)){
         $r_id=$row["r_id"];
         $r_name=$row["name"];
     }
    }
    
    $sql = "SELECT * FROM food WHERE options = 'Enable' and r_id='$r_id' ORDER BY f_id";
    $result = mysqli_query($conn, $sql);
    $foodCountRes=  mysqli_num_rows($result);
?>
     <h3 style="text-align: center;color: #ff6900;margin-top: 1rem">Restaurant <?php echo $r_name;?></h3>
<!-- Display all Food from food table -->
<?php
}
else if (isset($_SESSION['login_user2'])) {
    $Uname=$_SESSION['login_user2'];
    $type;
    $name_user;
    $sqlType="Select pref,name from customer where username='$Uname'";
    $result1 = mysqli_query($conn, $sqlType);
    if (mysqli_num_rows($result1) > 0)
     {
     while($row = mysqli_fetch_assoc($result1)){
         $type=$row["pref"];
         $name_user=$row["name"];
     }
    }
    
    $sql = "SELECT * FROM food WHERE options = 'Enable' and type='$type' ORDER BY f_id";
    $result = mysqli_query($conn, $sql);
    $foodCount=  mysqli_num_rows($result);
    
  ?>
  <h3 style="text-align: center;margin-top: 1rem;color: #ff6900;text-transform: capitalize ">Hello <?php echo $name_user;?></h3>
 <?php if($foodCount >0){?>
  <h4 style="text-align: center;" >As per your preference, Here is your <?php echo $type;?> Food  &#128522;</h4>
<?php
 }
}
else {
echo "<h3 style='text-align:center;margin-top:1rem;'>Menu</h3>";
$sql = "SELECT * FROM food WHERE options = 'Enable' ORDER BY f_id";
$result = mysqli_query($conn, $sql);
}
if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row' style='margin-top:2rem;'>";
      $r_id=$row["r_id"];
      $sql_R_id = "SELECT name FROM restaurant WHERE r_id='$r_id'";
      $result_rName = $conn->query($sql_R_id);
      if (mysqli_num_rows($result_rName) > 0) {
      while($row1 = $result_rName->fetch_assoc()) {
          $R_Name=$row1["name"];
        }
      
      }

?>
<div class="col-md-3">

    <form method="post" action="order.php?action=add&id=<?php echo $row['f_id']; ?>&Rid=<?php echo $row['r_id']; ?>">
<div class="mypanel card" align="center">
    <img src="<?php echo $row["images"]; ?>" style="height: 120px;width:100%" class="img-responsive">
    <h4 class="text-dark"><?php echo $R_Name; ?></h4>
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-info"><?php echo $row["description"]; ?></h5>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["r_id"]; ?>">
<button type="submit" name="add" style="margin-top:5px;"
       data-toggle="modal" data-target="#orderModal"
    <?php if (isset($_SESSION['login_user1'])){ ?> disabled <?php   } ?> 
    class="btn btn-success" value="Order">Order</button>
    </form>
<!--    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h3>Do You want to place this order?</h3>
          <h4>Cash on delivery is available</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="order.php?action=add&id=<?php echo $row['f_id']; ?>&Rid=<?php echo $row['r_id']; ?>"><button type="button" class="btn btn-primary" >Order</button></a>
      </div>
    </div>
  </div>
</div>-->

</div>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>
<div class="container displayNoneLess1200" style="margin-top: 3rem;margin-bottom: 3rem">
    <div class="">
      <center>
          <?php if($foodCountRes==0 && isset($_SESSION['login_user1'])){ ?>
           <label style="margin-left: 5px;color: red;"> <h1> No food added to your Restaurant.</h1> </label>
          <p>Add Food Items...!</p><?php }?>
          <?php if($foodCount==0 && isset($_SESSION['login_user2'])){?>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
         <?php }?>
      </center>
       
    </div>
  </div>
</div>
  <?php

}

?>

<!-- Footer -->
<footer class="page-footer font-small blue displayNoneLess1200" style="background: black;margin-top:2rem;color: white">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy; 2020 Copyright:
     Simran Nagdeo
  </div>
  <!-- Copyright -->

</footer>

<!-- Footer -->
</body>
</html>
<!-- Button trigger modal -->


<!-- Modal -->
