<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $update = "Update users set username = ".$mysqli->real_escape_string($_GET['username']).", password = ".$mysqli->real_escape_string($_GET['passHash'])." where isAdmin = ".$mysqli->real_escape_string($_GET['isAdmin']);

$result = $mysqli->exec($update);
echo $result;
//disconnect from database
$result->free();
$mysqli->close();
    exit();
}else{
    //if unable to create new record
    echo $query;
    echo "Database Error: Unable to retrieve records.";
}
//close database connection
$mysqli->close();
?>