<html>

  <head>
    <title> Customer Registration successful </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- Brand -->
       <a class="navbar-brand" href="#">FoodMall</a>

  <!-- Links -->
           <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color: white;">Home</a>
              </li>
           </ul>
           
        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
          </ul>
        </div>

      
    </nav>

<?php

require 'connection.php';
$conn = Connect();

$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['password']);
$preference=$conn->real_escape_string($_POST['pref']);
         $yes="false";
          
         $sqlUser="Select * from customer where username='$username'";
          $result1 = mysqli_query($conn, $sqlUser);
         
         if (mysqli_num_rows($result1) > 0)
          {
             header("location: usernameExist.html");
             return;
          }
          else{
         
$query = "INSERT into customer(name,username,email,contact,address,password,pref) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."','" . $preference ."')";
$register = $conn->query($query);

if (!$register){
	die("Couldnt enter data: ".$conn->error);
}
          

}
$conn->close();

?>


<div class="container">
	<div class="" style="text-align: center;margin-top: 14rem;">
		<h2> <?php echo "Welcome $fullname!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="customerlogin.php">HERE</a></p>
	</div>
</div>

    </body>
</html>