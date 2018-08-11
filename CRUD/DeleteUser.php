<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $delete = "Delete from users where id = ".$mysqli->real_escape_string($_GET['id']);

$result = $mysqli->exec($delete);
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
