<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $update = 'UPDATE data SET content = "'.$mysqli->real_escape_string($_GET['content']).'" WHERE page = "'.$mysqli->real_escape_string($_GET['page'].'"');

    //echo "{ 'info': ".$update."}"
 
// echo $result
if($mysqli->query($update) === TRUE){
//disconnect from database
$result->free();
$mysqli->close();
    exit();
}else{
    //if unable to create new record
    echo "Database Error: Unable to retrieve records.";
}
//close database connection
$mysqli->close();
?>