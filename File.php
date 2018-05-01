<?php

$servername = "Host";
$username = "DBUsername";
$password = "Password";
$dbname = "DatabaseName";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
date_default_timezone_set("Europe/London");


//comparing current date with database date.
 // opendir();
$compare = date("Y-m-d");

/*echo $compare;*/

$sql = "SELECT date FROM event_table WHERE date = '$compare'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
          $image = "images/Yes.png";
        
    }
} 
else {
    $image = "images/No.png";
}


//checking the database for next event

$next = date("Y-m-d");
$ql = "SELECT * FROM event_table WHERE date > '$next' ORDER BY date LIMIT 1" ;
$relt = $conn->query($ql);
if ($relt->num_rows > 0) {
    while($row = $relt->fetch_assoc()){
        $info = 'The Next Event Day is On ';
        $datetime = $row["date"];
        $time = strtotime($datetime);
        $myFormatForView = date("d-m-Y", $time);
    }
}
else {
    $display = 'Please Wait For Futher Updates';  // Adding more here 
}





$date_1 = date("Y-m-1");

$date_3 = date("Y-m-d");

if ($date_1 !== $date_3) {

}
else {

//getting information from other website and storing it in the database

$curl = curl_init();

$url = "https://www.brent.gov.uk/events-and-whats-on-calendar/?eventCat=Wembley+Stadium+events";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result_site = curl_exec($curl);
libxml_use_internal_errors(true);

$domd=@DOMDocument::loadHTML($result_site);


$dateElements=$domd->getElementsByTagName("article")->item(0)->getElementsByTagName("h3");
foreach($dateElements as $ele){
    $data = (date("Y-m-d",strtotime($ele->textContent)));
    
// echo "<br>".$data;
    $sql_1 = "SELECT * FROM event_table WHERE date = '$data'";
    $result_site = $conn->query($sql_1);

if ($result_site->num_rows > 0) {
    
    // output data of each row
    while($row = $result_site->fetch_assoc()) {
    }
} 
else {
   $results = mysqli_query($conn, "INSERT INTO event_table (id, date) VALUES ('',' $data')");
}
   
}

}

$conn->close();
?>
