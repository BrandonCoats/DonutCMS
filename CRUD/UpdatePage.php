<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $update = 'Update webpage set page = "'.$mysqli->real_escape_string($_GET['page']).'" where id = "'.$mysqli->real_escape_string($_GET['id']).'";';

    //echo "{ 'info': ".$update."}"
 
// echo $result
$result = $mysqli->query($update);

if(mysqli_query($mysqli, $update) === TRUE){
//disconnect from database
$mysqli->close();
    exit();
}else{
    //if unable to create new record
    echo "Database Error: Unable to retrieve records.";
}
//close database connection
$mysqli->close();
?>