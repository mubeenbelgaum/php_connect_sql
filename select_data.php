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

$eid=$_GET['eid'];
$name=$_GET['name'];
$dob=$_GET['dob'];
$contact=$_GET['contact'];
$email=$_GET['email'];
$address=$_GET['address'];
$doj=$_GET['doj'];
$salary=$_GET['salary'];


$sql = "INSERT INTO Employee (Eid, Ename,Dob,Contact,Emailid,Address,DOJ,Salary)
VALUES ('$eid', '$name', '$dob','$contact','$email','$address','$doj','$salary');";
$result=$conn->query($sql);

if($result)
{
echo "Data inserted successfully";
}


$sql="Select Eid,Ename,Dob,Contact,Emailid,Address,DOJ,Salary from Employee";
$result=$conn->query($sql);


echo "<table border='1'>
<tr>
<th>Employee id</th>
<th>Employee name</th>
<th>DOB</th>
<th>Employee contact no</th>
<th>Email-id</th>
<th>Address</th>
<th>Date of joining</th>
<th>Salary</th>

</tr>";


if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr>";
       echo "<td>". $row["Eid"]. "</td>";
       echo "<td>". $row["Ename"]. "</td>";
       echo "<td>". $row["Dob"]. "</td>";
       echo "<td>". $row["Contact"]. "</td>";
       echo "<td>". $row["Emailid"]. "</td>";
       echo "<td>". $row["Address"]. "</td>";
       echo "<td>". $row["DOJ"]. "</td>";
       echo "<td>". $row["Salary"]. "</td>";

       echo "</tr>";
   }
} else {
   echo "0 results";
}
echo "</table>";
$conn->close();
?>
