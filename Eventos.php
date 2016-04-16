


<?php

 header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");

  $Lista = array();

  $servername = "localhost";
  $username = "outsidet_smartfi";
  $password = "smartfit";
  $dbname = "outsidet_smartfit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Eventos";

if($_GET['id']){

   $sql .= " WHERE ID=".$_GET['id'];  

}else if($_GET['orderby']){

  $sql .= " order by ".$_GET['orderby'];

}else{

  $sql .= " order by ID desc";
}

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Lista[] = $row;      
           
    }
} else {
    //echo "0 results";
}
$conn->close();

echo json_encode($Lista); 

?>



