<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM panel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        	 echo "<li>";
        	 echo "<h5><b>NAME :</b> " .$row['stu_name']."<br>";
        	 echo "REGISTRATION NUMBER : " .$row['reg_num']."<br>";
        	 echo "DPERTMENT : " .$row['dept']."<br>";
        	 echo "COURSE : " .$row['course']."<br>";
        	 echo "COMMENT : " .$row['comment']."<br> </h5>";
        	 echo "</li><hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
