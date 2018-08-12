<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $insert = "Insert into image(page, path) values (".$mysqli->real_escape_string($_GET['page']).", ".$mysqli->real_escape_string($_GET['path']).")";

$result = $mysqli->query($insert);

if($result === true){
//disconnect from database
$result->free();
$mysqli->close();
    exit();
}
else{
    //if unable to create new record
    echo $result;
    echo "Database Error: Unable to retrieve records.";
}
//close database connection
$mysqli->close();
?>
