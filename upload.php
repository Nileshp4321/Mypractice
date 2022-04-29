<?php
$servername="localhost";
$username="nileshp";
$password="1234";
$f=$_FILES['file'];
// $conn=mysqli_connect($servername,$username,$password);
// if(!$conn)
// {
//     die("Connection failed".mysqli_connect_error($conn));
// }
// if(file_exists("photos/".$f['name']))
// {
//     echo"This file is already exist";
// }
// else
if($f['type']=="html")
{
move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
    echo"File Successfully Uploded";
}
else
{
    echo"Error";
}
// else
// {
//     echo"Unable to upload"; 
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data" >
    <input type="file"  name="file" />
    <button type="submit">Upload</button>
    <button type="reset">Reset</button>
</form>
 <?php 
  echo"
  <style>
  th,td
  {
      border:2px solid black;
      padding:30px;
  }
  table
  {
    border-collapse: collapse;
  }
  img
  {
      width:100px;
      height:50px;
  }
  </style>
  <table>
  <tr>
  <th>
   Photos
  </th>
  </tr>
  <td><img src='add.png' /></td>
  </table>
  "
 ?>
</body>
</html>
