<?php
    header("Access-Control-Allow-Origin: *");
    include 'dbconfig.php';

    $insert = 'Insert into users(username, password, isAdmin) values ("'.$mysqli->real_escape_string($_GET['username']).'", "'.$mysqli->real_escape_string($_GET['passHash']).'", 0)';

$result = $mysqli->query($insert);
if($result === TRUE){
    $query = 'SELECT * FROM users where username LIKE "%'.$mysqli->real_escape_string($_GET['username']).'%" AND password like "%'.$mysqli->real_escape_string($_GET['passHash']).'%";';
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
                 $myJson .= '"username":'.'"'.$username.'"'.',';
                 $myJson .= '"password":'.'"'.$password.'"'.',';
                 $myJson .= '"isAdmin":'.'"'.$isAdmin.'"';
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