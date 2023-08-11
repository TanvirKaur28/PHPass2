<?php
	// connects to the database by taking credentials
  //error handling
  try{
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Tanvir200539522', 'Tanvir200539522', 'LDvq_hfsF8');
   //sets attributes
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
// catches error and display error message with exceptions
  catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
  }
?>
