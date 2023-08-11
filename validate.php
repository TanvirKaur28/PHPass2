<?php
$name = $_POST['name'];
// Hash the user's password 
$password = hash('sha512', $_POST['password']);
//connect to database
require './database.php';
//run the sql query to get customer id of that record whose name as well as password match
$sql = "SELECT customer_id FROM customer WHERE name = '$name' AND password = '$password'";
//stores result
$res = $conn->query($sql);
//counts the rows in result of query
$rCount = $res -> rowCount();
//if record matches the record in result then login in successful
if($rCount == 1){
  echo '<p>Logged in successfully</p>';
  //redirect to final.php
  header('Location: final.php');
  exit(); 
}
//if record does not matches the record in result then login gets failed
else{
  echo '<p>Login Failed</p>';
}
$conn = null;
?>
