<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $update = "Update data set data.page = ".$mysqli->real_escape_string($_GET['page']).", data.content = ".$mysqli->real_escape_string($_GET['content'])." where data.id = ".$mysqli->real_escape_string($_GET['id']);

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