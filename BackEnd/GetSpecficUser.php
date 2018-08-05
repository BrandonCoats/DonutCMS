<?php
 header("Access-Control-Allow-Origin: *");
//include database connection
include 'dbconfig.php';
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
$query = "SELECT * FROM users";

if(isset($_GET['username']))
        {
            $query .= "AND summary LIKE '%".$mysqli->real_escape_string($_GET['query'])."%'";
        }
if(isset($_GET['id']))
        {
            $query .= "AND budget <= '".$mysqli->real_escape_string($_GET['budget'])."'";
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
    $myJson = '{"User": [';
    while( $row = $result->fetch_assoc() ){

        //this will make $row['firstname'] to
        //just $firstname only
        extract($row);
        
        //creating new table row per record
        $myJson .= '{';
            $myJson .= '"id":'.'"'.$id.'"'.',';
            $myJson .= '"username":'.'"'.$username.'"'.',';
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