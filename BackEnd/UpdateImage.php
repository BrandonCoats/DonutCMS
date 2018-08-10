<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $update = 'Update image set path = "'.$mysqli->real_escape_string($_GET['path']).'" where page = "'.$mysqli->real_escape_string($_GET['page']);

    //echo "{ 'info': ".$update."}"
$result = $mysqli->query($update);
echo $result;
if($result != null){
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