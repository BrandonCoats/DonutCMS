<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $insert = "Insert into image(page, path) values (".$mysqli->real_escape_string($_GET['page']).", ".$mysqli->real_escape_string($_GET['path']).")";

$result = $mysqli->exec($insert);
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
