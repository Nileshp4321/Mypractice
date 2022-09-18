<?php
$servername = "localhost";
$username = "nileshp";
$password = "1234";
$dbname = "myDB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT *FROM Student";

if ($result = mysqli_query($conn, $sql)) {
  // Fetch one and one row
  echo "Details from MyGuests is as follows <br>";
  while ($row = mysqli_fetch_row($result)) {
     echo "<br> Rollno: ". $row[0]. " Name is: ". $row[1]. "   Fname: " . $row[2] ."  Mname: ".$row[3]."  Dob:  ".$row[4];
    }
} 

mysqli_close($conn);
?>

