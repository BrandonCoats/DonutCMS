<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $update = 'Update data set content = "'.$mysqli->real_escape_string($_GET['content']).'" where page = "'.$mysqli->real_escape_string($_GET['page']).'";';

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