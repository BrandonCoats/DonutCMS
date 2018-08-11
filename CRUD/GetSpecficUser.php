<?php
 header("Access-Control-Allow-Origin: *");
//include database connection
include 'dbconfig.php';
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
$query = "SELECT * FROM users where username LIKE '%".$mysqli->real_escape_string($_GET['username'])."%' AND password like '%".$mysqli->real_escape_string($_GET['password']).";
        }
       
//echo $query;
//execute the query
if( $mysqli->query($query) ) {
 $result = $mysqli->query( $query );
//get number of rows returned
$num_results = $result->num_rows;
if( $num_results > 0){ //it means there's already at least one database record

    //loop to show each records
    $numLeft = $num_results;
    if($numLeft == 1){
        extract($results);
        //creating new table row per record
        $myJson .= '{';
            $myJson .= '"id":'.'"'.$id.'"'.',';
            $myJson .= '"username":'.'"'.$username.'"'.',';
            $myJson .= '"password":'.'"'.$password.'",';
            $myJson .= '"isAdmin":'.'"'.$isAdmin.'"';
            $myJson .= '}';
            echo $myJson;
        }
    }
    else{
        $myJson ='{ "info": "Error: ['.$numLeft.'] results found."}';
    }
   
}else{
    $myJson = '{"info": "No results found"}';
        echo $myJson;
}
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