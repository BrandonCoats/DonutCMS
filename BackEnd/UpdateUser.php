<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $update = "Update users set username = ".$mysqli->real_escape_string($_GET['username']).", password = ".$mysqli->real_escape_string($_GET['passHash']).", isAdmin = ".$mysqli->real_escape_string($_GET['isAdmin'])'.where id = '.$mysqli->real_escape_string($_GET['id']);

    //echo "{ 'info': ".$update."}"
 
// echo $result
$result = $mysqli->query($update);

if(mysqli_query($mysqli, $update) === TRUE){
//disconnect from database
$mysqli->close();
    exit();
}else{
    //if unable to create new record
    echo "Database Error: Unable to retrieve records.";
}
//close database connection
$mysqli->close();