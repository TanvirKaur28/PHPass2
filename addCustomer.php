<?php
  // require database file for connection
  require './database.php';
  // variables to store values
  $name = $_POST['name'];  //stores name
  $email= $_POST['email']; //stores email
  $password = $_POST['password']; //stores password
  $gender = $_POST['gender']; //stores gender
  $terms = $_POST['terms']; 
 
  //if user did not agree to the terms then message will be displayed
  if(($terms != 'yes')){
    echo '<p>############# To move further you must agree to terms and conditions ##############</p>';
    
    }
   else{
      $password = hash('sha512',$password);
      //insert values to customer table
      $sql = "INSERT INTO customer (name, email, password, gender, terms) VALUES ('$name', '$email', '$password', '$gender','$terms');";
      //execute sql query
      $conn->exec($sql);
      echo'<h3>Admin saved</h3>';
      //takes to login page
      echo '<a href="login.php">CLICK ME TO GO TO LOGIN PAGE</a>';
      $conn = null;
      }
	?>
	

