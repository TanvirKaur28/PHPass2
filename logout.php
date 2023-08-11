<?php
// Start  session
session_start();

// Destroy session variables
session_unset();

// Destroy session
session_destroy();

// Redirect to an index page 
header('Location: index.php');
exit();
?>
