<?php 
// intialize the session 
session_start();

// Unset allo of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to the home page 
header("location: /index.php");

?>