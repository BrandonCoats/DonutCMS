<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $insert = "Insert into users(username, password, isAdmin) values (".$mysqli->real_escape_string($_GET['username']).", ".$mysqli->real_escape_string($_GET['password']).", 0)";

$result = $mysqli->exec($insert);
//echo $result;
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