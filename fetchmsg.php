<?php
include 'db_connect.php';

$sql="SELECT*FROM msg";
if(mysqli_query($conn,$sql))
{
    $result=mysqli_query($conn,$sql);              
    while($row=mysqli_fetch_row($result))
  {
     echo"<div style='padding:0.5rem;margin:2rem 2rem;background-color:rgb(88, 86, 86);'>
     <img style='width:5%;float:left;' src='user.png'/>
     <h4 style='color:white;margin:0;'>".$row[0]."</h4><b style='color:red;'>".$row[2];
     echo"</b>";       
     echo"<br><p style='padding-left:50px;color:yellow;'><img style='width:3%;margin-right:0.2rem;'src='comment.png' /><b>  ".$row[1]."</b></p>
     </div>                 
     ";       
  }
}
else
{
    die("Error :".mysqli_error($conn));
}
?>