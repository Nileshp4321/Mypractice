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

        $rollno =  $_REQUEST['roll_no'];
        $name = $_REQUEST['name1'];
        $Fname = $_REQUEST['Fname'];
        $Mname = $_REQUEST['Mname'];
        $Dob = $_REQUEST['Dob'];
        
$sql = "INSERT INTO Student (rollno,name,Fname,Mname,Dob) VALUES ('$rollno ', '$name','$Fname','$Mname','$Dob')";

if (mysqli_query($conn, $sql)) {
 echo "New record created successfully with form input";
} else {
 echo "Error: " . $sql . "<br><br><br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
