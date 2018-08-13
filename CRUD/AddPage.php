<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $insert = 'Insert into pages(page) values ("'.$mysqli->real_escape_string($_GET['page']).'")';

$result = $mysqli->query($insert);
if($result === TRUE){
   $myJson = '{ "info": "add page to table"}';
   echo $myJson;
     }else{
         $myJson = '{"info": "No results found"}';
             echo $myJson;
     }
     //disconnect from database
     $QResult->free();
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