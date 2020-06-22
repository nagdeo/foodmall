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
    <title> My Orders </title>
    <link rel="stylesheet" type = "text/css" href ="css/mediaQuery.css">
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
        .face {
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
          
            <a class="navbar-brand" style="color:white;" href="index.php">FoodMall</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
          </ul>

<?php

      if (isset($_SESSION['login_user2'])) {
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
      <div class="container" style="padding-bottom:5rem;">
           <table id="t01" style="margin-top: 10rem;">
             <tr>
                 <th>Food</th>
                 <th>price</th> 
                 <th>Order Date</th>
             </tr>
  
  
      

      <?php
        $total=0;
        while($roworders = mysqli_fetch_assoc($resultOrders)){
           echo "<tr><td>" .$roworders['foodname']."</td>
                 <td>".$roworders['price']."</td>
                 <td>".$roworders['order_date']."</td>
                 </tr>";
            $total=$total+$roworders['price'];
        }
        ?>
             <tr >
                 
                 <td colspan="3"><span style="float:right;margin-right: 2rem"><b>Total Price:&nbsp;&nbsp;</b><?php echo $total;?></span></td>
             </tr>
              </table>
      </div>
          <?php
          
      } else{
      ?>
      <div class="face" style="width: 100%;text-align: center;font-size: 2rem;height: 100%;color: darkolivegreen">
         <p style="font-size: 3rem;text-align: center;margin-top: 20rem;">There are no orders</p>
      </div>    
  <?php }?>
      
    </body>
</html>