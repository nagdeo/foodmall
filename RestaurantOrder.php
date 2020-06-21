<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user1'])){
header("location: resLogin.php"); 
}
?>

<html>

  <head>
    <title> Restaurant Orders </title>
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
 text-align: center;
    padding: 10px 0px;
}
#t01 td {
 text-transform: capitalize;
  text-align: center;
    padding: 10px 0px;
}
.face:hover {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
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
            <a class="navbar-brand" href="index.php" style="color:white;">FoodMall</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
              <li><a href="#" style="color:white"> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            
            <li><a href="logout_m.php"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
           
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}

  ?>




        </div>

      </div>
    </nav>

 <?php   
     $username=$_SESSION['login_user1'];
     $sqluser = "SELECT * FROM restaurant WHERE username = '$username' ";
     $resultUser = mysqli_query($conn, $sqluser);
     $c_id=0;

      if (mysqli_num_rows($resultUser) > 0)
      {
 
        while($rowuser = mysqli_fetch_assoc($resultUser)){
    
         
         $r_id =  $rowuser["r_id"];
        }
      }
     
      $sqlOrders = "SELECT * FROM orders WHERE r_id = '$r_id' ";
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
                 <th>Customer name</th>
             </tr>
  
  


      <?php
        while($roworders = mysqli_fetch_assoc($resultOrders)){
            //get customer name
            $cust_id=$roworders['c_id'];
            $cust_name;
            $sqlCustname = "SELECT name FROM customer WHERE cust_id = '$cust_id' ";
            $resultCustName = mysqli_query($conn, $sqlCustname);
            if (mysqli_num_rows($resultCustName) > 0)
             {
                while($rowcustname = mysqli_fetch_assoc($resultCustName)){
                $cust_name=$rowcustname['name'];
                }
              }
             echo "<tr><td>" .$roworders['foodname']."</td>
                 <td>".$roworders['price']."</td>
                 <td>".$roworders['order_date']."</td><td>".
                    $cust_name."</td>
                 </tr>";
           
        }
        ?>
              </table>
      </div><?php
      } else{
      ?>
      <div class="face" style="width: 100%;text-align: center;font-size: 2rem;height: 100%;color: darkolivegreen">
          <p style="margin-top: 10%">There are no orders for your Restaurant!</p>
      </div>
      <?php }?>
      
    </body>
</html>