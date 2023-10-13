<?php

$databaseHost = '127.0.0.1';//or the Localhost
$databaseName = 'pdb'; //Your db_name
$databaseUsername = 'root'; //root by default for localhost
$databasePassword = '';// by default empty for localhost
$conn = new mysqli ($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($conn->connect_error){
    die("connection failed" .$conn->connection_error);
} 
$sql = "INSERT INTO tbl (fname,lname,email) VALUES('scotchbrite', 'nirma', 'ibnebatuta@gmail.com')";
if($conn->query($sql)==TRUE){
    echo "NEW RECORD SUCCESSFULLY CREATED";
}
else{
    echo "ERROR" .$sql. "<br>" .$conn->error;
}
$sql = "SELECT fname,lname FROM tbl";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "NAME:" .row["fname"]. "" .$row["lname"]."<br>";
    }
}else{
    echo "0 RESULTS";
}
$conn->close();
?>