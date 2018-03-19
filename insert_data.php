<?php
$servername = "localhost";
$username = "root";
$password = "aissel123";
$dbname = "Company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Employee (Eid, Ename,Dob,Contact,Emailid,Address,DOJ,Salary)
VALUES ('1005', 'Arpita', '1995/08/09','7895412307','arpita@gmail.com','Mundargi','2018/03/12','18000');";


if ($conn->multi_query($sql) === TRUE) {
   echo "New records created successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
