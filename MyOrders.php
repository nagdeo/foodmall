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
    <style>
        
        table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
    </style>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/cart.css">
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
            <a class="navbar-brand" style="color:white;" href="index.php">FoodMall</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
              <li><a href="#" style="color:white;">Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="logout_m.php">Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
               <li><a href="#" style="color:white;"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="logout_u.php">Log Out </a></li>
          </ul>
  <?php        
}

  ?>



        </div>

      </div>
    </nav>

 <?php   
     $username=$_SESSION['login_user2'];
     $sqluser = "SELECT * FROM customer WHERE username = '$username' ";
     $resultUser = mysqli_query($conn, $sqluser);
     $c_id=0;

      if (mysqli_num_rows($resultUser) > 0)
      {
 
        while($rowuser = mysqli_fetch_assoc($resultUser)){
    
         
         $c_id =  $rowuser["cust_id"];
        }
      }
     
      $sqlOrders = "SELECT * FROM orders WHERE c_id = '$c_id' ";
      $resultOrders = mysqli_query($conn, $sqlOrders);
 
      if (mysqli_num_rows($resultOrders) > 0)
      {
      ?>
      <div class="container">
           <table id="t01" style="margin-top: 1rem;">
             <tr>
                 <th>Food</th>
                 <th>price</th> 
                 <th>Order Date</th>
             </tr>
  
  


      <?php
        while($roworders = mysqli_fetch_assoc($resultOrders)){
           echo "<tr><td>" .$roworders['foodname']."</td>
                 <td>".$roworders['price']."</td>
                 <td>".$roworders['order_date']."</td>
                 </tr>";
           
        }
        ?>
              </table>
      </div><?php
      } else{
      ?>
      <p>There are no orders</p>
      <?php }?>
      
    </body>
</html>