<?php
$servername = "localhost";
$username = "nileshp";
$password = "1234";
$dbname = "Hostel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
        $name = $_REQUEST['name'];
        $Fname = $_REQUEST['fname'];
        $Mname = $_REQUEST['mname'];
        $mob = $_REQUEST['mob'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['dob'];
        $registration = $_REQUEST['registration'];
        $roomno = $_REQUEST['Roomno'];
        
$sql = "INSERT INTO Hostel(Roomno,name,fname,mname,Mob,email,Dob,registration) VALUES ('$roomno','$name','$Fname','$Mname','$mob','$email','$dob','$registration')";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Regestration Form</title>
    <link rel="stylesheet" href="Home.css" />
    <style>
           header h1 {
            color: white;
            background-color: rgb(86, 119, 211);
            border: none;
            width: 100%;
            height: 35px;
            text-align: center;
            border-radius: 6px;   
         
    </style>
</head>

<body>
    <header>
        <h1>Goverment Engineering Boys Hostel, Ajmer</h1>
        <nav>
            <ul>
                <li><a id="a1" href="new.html">Home</a></li>
                <li><a id="a2" href="FillForm.php">Fill Form</a></li>
                <li><a id="a3" href="List.php">Total List</a></li>
                <li><a id="a4" href="contactus.html" name="Contact">About Us</a></li>
            </ul>
        </nav>
    </header><br>
      <?php 
    if (mysqli_query($conn, $sql)) {
 echo "
 <style>
  h2
  {
  color:green;
  text-align:center;
  }
 </style>
 <h2> You Form has been Submitted Successfully <h2>";
} 
/*else {
 echo "Error: " . $sql . "<br><br><br>" . mysqli_error($conn);
}*/

mysqli_close($conn);
    
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <a href="#"><img src="fbicon.png" width="50px" height="45px" /></a>
        <a href="#"><img src="igicon.png" width="50px" height="45px" /></a>
        <a href="#"><img src="tw.png" width="50px" height="45px" /></a>
    </footer>
</body>

</html>


