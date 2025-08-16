<?php

function getDatabaseConnection(){
    
    $servername = 'sql206.infinityfree.com';
    $user = 'if0_39717189';
    $pass = 'regform1212';
    $db_name = 'if0_39717189_XXX';
    
    // Create Connection
    $conn = mysqli_connect($servername, $user, $pass, $db_name);
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
}

?>