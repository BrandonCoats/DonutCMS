<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $insert = 'Insert into pages(page) values ("'.$mysqli->real_escape_string($_GET['page']).'")';

$result = $mysqli->query($insert);

if($result === TRUE){
    $query = 'SELECT * FROM pages where page LIKE "%'.$mysqli->real_escape_string($_GET['page']).'%"';
}
else{
    $myJson = '{"info": "No results found"}';
    echo $myJson;
}
    //echo $query;
    //execute the query
    if( $mysqli->query($query) ) {
     $Qresult = $mysqli->query( $query );
    
     $num_results = $Qresult->num_rows;
     if( $num_results > 0){ //it means there's already at least one database record
     
         //loop to show each records
         $numLeft = $num_results;
         $myJson = '{"AllData": [';
         while( $row = $Qresult->fetch_assoc() ){
     
             //this will make $row['firstname'] to
             //just $firstname only
             extract($row);
             
             //creating new table row per record
             $myJson .= '{';
                 $myJson .= '"id":"'.$id.'",';
                 $myJson .= '"page":'.'"'.$username.'"';
                 $myJson .= '}';
                 if($numLeft > 1)
                 {
                     $myJson .= ',';
                 }
                 else
                 {
                     $myJson .= ']}';
                 }
                 $numLeft = $numLeft - 1;
         }
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