<?php 
  $error='';
?>
<html>

  <head>
    <title> Customer Registration successful </title>
    <style>
        .homeLink:hover{
             color: white;
        }
    </style>
  </head>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" type = "text/css" href ="css/bootstrap-4.5.0-dist/css/bootstrap.min.css">


  <body>


   <nav class="navbar navbar-expand-lg navbar-light bg-dark">
       <a class="navbar-brand" href="#" style="color: white;">FoodMall</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link homeLink" href="index.php" style="color:grey;">Home</a>
    </li>
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
		<p>Login Now from <a href="customerlogin.php">here</a></p>
	</div>
</div>

    </body>
</html>