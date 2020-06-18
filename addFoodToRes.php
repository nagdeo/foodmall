<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: reslogin.php'); 
}



$name = $conn->real_escape_string($_POST['name']);
$price = $conn->real_escape_string($_POST['price']);
$description = $conn->real_escape_string($_POST['description']);


// Storing Session
$user_check=$_SESSION['login_user1'];
echo $user_check;
$R_IDsql = "SELECT r_id FROM restaurant WHERE username='$user_check'";
$result = $conn->query($R_IDsql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["r_id"]. " - Name: " . $row["name"]. "<br>";
    $R_id=$row["r_id"];
  }
} else {
  echo "0 results";
}
$images_path = $conn->real_escape_string($_POST['images_path']);

$query = "INSERT INTO food(name,price,description,r_id,images,options) VALUES('" . $name . "','" . $price . "','" . $description . "','" . $R_id ."','" . $images_path . "','Enable')";
echo $query;
$success = $conn->query($query);

if (!$success){
    echo $conn->error;
}else{
   echo "SUCCESS";
	header('Location:index.php');

}