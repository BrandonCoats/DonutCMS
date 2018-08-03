<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $insert = "Insert into data(page, content) values (".$mysqli->real_escape_string($_GET['page']).", ".$mysqli->real_escape_string($_GET['content']).")";

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
