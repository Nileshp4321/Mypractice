<?php
error_reporting(E_ERROR | E_PARSE);
$value=$_GET['value'];
$servername="localhost";
$username="nileshp";
$password="1234";
$dbname="test";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
   die("Connection failed".mysqli_connect_error());

}

$sql="SELECT*from signup where email='$value'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);

if($row[0]==$value) 
{ 
     echo"<h5 style='color:Red;'>This account is already exists!</h5>"; 
} 
else 
{ 
    echo"<h5 style='color:green;'>This username is available<h5>"; 
 }
 
?>








<!-- // if(!mysqli_query($conn,$sql))
// {
//    echo"Ok continue";
// }
// else
// {
//     echo"exist!";
// } -->










