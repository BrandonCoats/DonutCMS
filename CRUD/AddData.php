<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $insert = "Insert into data(page, content) values (".$mysqli->real_escape_string($_GET['page']).", ".$mysqli->real_escape_string($_GET['content']).")";

$result = $mysqli->query($insert);
if($result === null){
//disconnect from database
$result->free();
$mysqli->close();
    exit();
}else{
    //if unable to create new record
    echo $result;
    echo "Database Error: Unable to retrieve records.";
}
//close database connection
$mysqli->close();
?>
