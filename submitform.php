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
<?php
$servername="localhost";
$username="nileshp";
$password="1234";
$dbname="BookDB";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed ".mysqli_connect_error());
}
$name=$_POST['name'];
$clgid=$_POST['clgid'];
$bookname=$_POST['bookname'];
$bookid=$_POST['bookid'];
$bookallotdate=$_POST['bookallotdate'];
$submission=$_POST['submission'];
$sql="INSERT INTO Book (name,clgid,bookname,bookid,bookallotdate,submission) VALUES ('$name','$clgid','$bookname','$bookid','$bookallotdate','$submission')";
if(!mysqli_query($conn,$sql))
{
 die("Error : ".$sql.mysqli_error($conn));
}
else
{
   echo"<style>
   h2
   {
       color:green;
       text-align:center;
   }
   </style>
   <h2 >You Form Has Been Sumbitted Succesfully</h2>";
}

mysqli_close($conn);



?>