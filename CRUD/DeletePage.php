<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $delete = "Delete from page where page = ".$mysqli->real_escape_string($_GET['page']);

$result = $mysqli->exec($delete);
if($result === TRUE)
{
    //disconnect from database
    $result->free();
    $mysqli->close();
        exit();
}
else
{
    //if unable to create new record
    echo $query;
    echo "Database Error: Unable to retrieve records.";
}
//close database connection
$mysqli->close();
?>
