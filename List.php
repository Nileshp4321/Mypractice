<?php
$servername = "localhost";
$username = "nileshp";
$password = "1234";
$dbname = "BookDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM BOOK ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Fullcss.css"/>
    <style>
        h1
        {
            text-align: center;
        }
        span
        {
            color: red;
        }
        form
        {
            text-align: center;
            display: flex;
            margin:3px 12px ;
        }
        h1
        {
            text-align: center;
        }
        button
        {
            color: white;
            background-color: rgb(109, 109, 212);
            border-radius: 12px;
            outline: none;
            padding: 2px 8px;
        }
        th
        {
           padding:0px;        
           text-align:center;   
        }
       
        </style>
</head>
<body>
    <h1>Goverment Engineering College Ajmer</h1>
    <ul>
        <li><a class="a1" href="home1.html">Home</a></li>
        <li><a class="a1" href="Library.html">Library</a></li>
        <li><a class="a1" href="List.php">List</a></li>
        <li><a class="a1" href="#">Contact Us</a></li>
        <input id="input1"type="text" />
        <button id="button1"type="sumbit">Search</button>
    </ul>
    <table cellspacing='0' cellpadding='10' width='1600' border="1" >
    <tr>
    <th>College Id</th>
    <th>Book Allocated</th>       
    <th>Allot Date</th>       
    <th>Submission Date</th>       
    </tr> 
    <?php
    if($result=mysqli_query($conn,$sql))
    {
        echo"Book Allready Alloceted";
   
    while($row=mysqli_fetch_row($result))
    {   
      echo"
      <style>
        table
        {
            text-align:center;
             
        }
        td
        {
            padding: 10px;
        }
        </style>
        <table width='1500'>
          <tr>
        <td>$row[1]</td>
        <td>$row[0]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        </tr>";
       
    }
}
    mysqli_close($conn);
    ?></table>
   
    



