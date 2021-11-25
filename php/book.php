<?php

$link = mysqli_connect("localhost", "root", "", "heritagetours");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$people = mysqli_real_escape_string($link, $_REQUEST['people']);

 
// Attempt insert query execution  
$sql = "INSERT INTO book (date, people) VALUES ('$date', '$people')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>