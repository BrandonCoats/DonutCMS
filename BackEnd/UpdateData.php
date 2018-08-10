<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $update = 'Update data set page = "'.$mysqli->real_escape_string($_GET['page']).'", content = "'.$mysqli->real_escape_string($_GET['content']).'" where id = '.$mysqli->real_escape_string($_GET['id']).";";

    //echo "{ 'info': ".$update."}"
$result = $mysqli->exec($update);
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